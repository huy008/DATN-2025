<?php

namespace App\Services;

use App\Services\Interfaces\AttributeCatalogueServiceInterface;
use App\Services\BaseService;
use App\Repositories\Interfaces\AttributeCatalogueRepositoryInterface as AttributeCatalogueRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Classes\Nestedsetbie;
use App\Repositories\AttributeValueRepository;
use Illuminate\Support\Str;

/**
 * Class AttributeCatalogueService
 * @package App\Services
 */
class  AttributeValueService
{
    protected $attributeCatalogueRepository;

    public function __construct(
        AttributeValueRepository $attributeCatalogueRepository,
    ){
        $this->attributeCatalogueRepository = $attributeCatalogueRepository;
    }

    public function paginate($request){
        $perPage = $request->integer('perpage');
        $condition = [
            'value' => addslashes($request->input('keyword')),
        ];
        $attributeCatalogues = $this->attributeCatalogueRepository->pagination(
            column: ['id', 'value', 'attribute_id'],
            perPage: $perPage,
            extend: ['path' => 'attribute/value/index'],
            condition : $condition
        );

        return $attributeCatalogues;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payload = $request->only(['attribute_id', 'value']);
            $attributeCatalogue = $this->attributeCatalogueRepository->create($payload);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function update($id, $request){
        DB::beginTransaction();
        try{
            $attributeCatalogue = $this->attributeCatalogueRepository->findById($id);
            $this->attributeCatalogueRepository->update($attributeCatalogue->id,  $request->only(['attribute_id', 'value']));
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
            $attributeCatalogue = $this->attributeCatalogueRepository->delete($id);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }


    private function payload(){
        return [
            'parent_id',
            'follow',
            'publish',
            'image',
            'album',
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
