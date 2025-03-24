<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductVariantAttribute;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService 
{
    protected $productRepository;
    
    public function __construct(
        ProductRepository $productRepository,
    ){
        $this->productRepository = $productRepository;
    }

    public function paginate($request){
        $perPage = $request->integer('perpage');
        $condition = [
            'keyword' => addslashes($request->input('keyword')),
        ];
        $paginationConfig = [
            'path' => 'product.index', 
            // 'groupBy' => $this->paginateSelect()
        ];
        $orderBy = ['id', 'DESC'];
        // $relations = ['category'];

        $products = $this->productRepository->pagination(
            column: $this->paginateSelect(),
            condition: $condition,
            perPage: $perPage,
            extend:$paginationConfig,
            orderBy: $orderBy,
        ); 
        return $products;
    }

    public function create($request){
        $attribute = $request->attribute;
        $result = $this->transformAttributeArray($attribute);

        DB::beginTransaction();
        try{
            $product = Product::create([
                'category_id' => $request->product_catalogue_id,
                'name' => $request->name,
                'sku' => $request->sku,
                'description' => $request->description,
                'brand' => $request->branch,
                'base_price' => $request->price,
                'img_thumbnail' => $request->image,
            ]);

            foreach ($request->variant['price'] as $index => $price) {
                $variant = $product->variants()->create([
                    'price' => $price,
                    'stock_quantity' => $request->variant['quantity'][$index],
                    'image_url' => $request->variant['album'][$index],
                    'sku' => $request->variant['sku'][$index],
                ]);
                $result[$index]['variantId'] = $variant->id;
            }

            foreach ($result as $keys => $values) {
                foreach ($values as $key => $value) {
                    if ($key === "variantId") {
                        continue;
                    }
                    ProductVariantAttribute::create([
                        'variant_id' => $values['variantId'],
                        'attribute_id' => $key,
                        'attribute_value_id' => $value,
                    ]);
                }
            }
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    // function transformAttributeArray($attribute)
    // {
    //     $result = [];

    //     foreach ($attribute["id"] as $index => $idString) {
    //         $temp = [];
    //         foreach ($attribute as $key => $values) {
    //             if ($key === "id") continue; 
    //             if (isset($values[$index])) {
    //                 $temp[$key] = $values[$index];
    //             } else {
    //                 $temp[$key] = $values[0];
    //             }
    //         }

    //         $result[] = $temp; 
    //     }

    //     return $result;
    // }
    function transformAttributes($attributes)
    {
        $result = [];

        foreach ($attributes['id'] as $combination) {
            $combinationValues = array_map('trim', explode(',', $combination)); // Tách & loại bỏ khoảng trắng
            $formattedItem = [];

            $attributeIds = array_keys(array_filter($attributes, fn($key) => $key !== 'id', ARRAY_FILTER_USE_KEY));

            foreach ($attributeIds as $index => $attributeId) {
                $formattedItem[$attributeId] = $combinationValues[$index] ?? null; // Gán đúng giá trị
            }

            $result[] = $formattedItem;
        }

        return $result;
    }
    public function update($id, $request){
        $attribute = $request->attribute;
        $result = $this->transformAttributes($attribute);
        DB::beginTransaction();
        try{
            $product = Product::with('variants.attributes')->find($id);
            $product->update([
                'category_id' => $request->product_catalogue_id,
                'name' => $request->name,
                'sku' => $request->sku,
                'description' => $request->description,
                'brand' => $request->branch,
                'base_price' => $request->price,
                'img_thumbnail' => $request->image,
            ]);
            foreach ($product->variants as $variant) {
                $variant->attributes()->delete(); 
                $variant->delete(); 
            }
            foreach ($request->variant['price'] as $index => $price) {
                $variant = $product->variants()->create([
                    'price' => $price,
                    'stock_quantity' => $request->variant['quantity'][$index],
                    'image_url' => $request->variant['album'][$index],
                    'sku' => $request->variant['sku'][$index],
                ]);
                $result[$index]['variantId'] = $variant->id;
            }
            foreach ($result as $keys => $values) {
                foreach ($values as $key => $value) {
                    if($key === "variantId") {
                        continue;
                    }
                    ProductVariantAttribute::create([
                        'variant_id' => $values['variantId'],
                        'attribute_id' => $key,
                        'attribute_value_id' => $value,
                    ]);
                }
            }
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try{
            $product = $this->productRepository->delete($id);
            
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            // echo $e->getMessage();die();
            return false;
        }
    }

    private function createProduct($request){
        $payload = $request->only($this->payload());
        $payload['user_id'] = Auth::id();
        // $payload['album'] = $this->formatAlbum($request);
        // $payload['price'] = convert_price($payload['price']);
        $product = $this->productRepository->create($payload);
        return $product;
    }

    private function uploadProduct($product, $request){
        $payload = $request->only($this->payload());
        // $payload['album'] = $this->formatAlbum($request);
        // $payload['price'] = convert_price($payload['price']);
        return $this->productRepository->update($product->id, $payload);
    }

   
    private function updateLanguageForProduct($product, $request, $languageId){
        $payload = $request->only($this->payloadLanguage());
        $payload = $this->formatLanguagePayload($payload, $product->id, $languageId);
        return $this->productRepository->createPivot($product, $payload, 'languages');
    }

    private function updateCatalogueForProduct($product, $request){
        $product->product_catalogues()->sync($this->catalogue($request));
    }

    private function formatLanguagePayload($payload, $productId, $languageId){
        $payload['canonical'] = Str::slug($payload['canonical']);
        $payload['language_id'] =  $languageId;
        $payload['product_id'] = $productId;
        return $payload;
    }


    private function catalogue($request){
        if($request->input('catalogue') != null){
            return array_unique(array_merge($request->input('catalogue'), [$request->product_catalogue_id]));
        }
        return [$request->product_catalogue_id];
    }
    
    public function updateStatus($post = []){
        DB::beginTransaction();
        try{
            $payload[$post['field']] = (($post['value'] == 1)?2:1);
            $post = $this->productRepository->update($post['modelId'], $payload);
            // $this->changeUserStatus($post, $payload[$post['field']]);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function updateStatusAll($post){
        DB::beginTransaction();
        try{
            $payload[$post['field']] = $post['value'];
            $flag = $this->productRepository->updateByWhereIn('id', $post['id'], $payload);
            // $this->changeUserStatus($post, $post['value']);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    private function whereRaw($request, $languageId){
        $rawCondition = [];
        if($request->integer('product_catalogue_id') > 0){
            $rawCondition['whereRaw'] =  [
                [
                    'tb3.product_catalogue_id IN (
                        SELECT id
                        FROM product_catalogues
                        JOIN product_catalogue_language ON product_catalogues.id = product_catalogue_language.product_catalogue_id
                        WHERE lft >= (SELECT lft FROM product_catalogues as pc WHERE pc.id = ?)
                        AND rgt <= (SELECT rgt FROM product_catalogues as pc WHERE pc.id = ?)
                        AND product_catalogue_language.language_id = '.$languageId.'
                    )',
                    [$request->integer('product_catalogue_id'), $request->integer('product_catalogue_id')]
                ]
            ];
            
        }
        return $rawCondition;
    }

    private function paginateSelect(){
        return [
            'id',
            'name',
            'base_price',
            'img_thumbnail',
            'short_description'
        ];
    }

    private function payload(){
        return [
            'follow',
            'publish',
            'image',
            'album',
            'price',
            'made_in',
            'code',
            'product_catalogue_id',
        ];
    }

    private function payloadLanguage(){
        return [
            'name',
            'description',
            'content',
            'meta_title',
            'meta_keyword',
            'meta_description',
            'canonical'
        ];
    }


}
