<?php

namespace App\Services;

use App\Repositories\DiscountRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class AttributeService
 * @package App\Services
 */
class DiscountService
{
    protected $discountRepository;
    
    public function __construct(
        DiscountRepository $discountRepository,
    ){
        $this->discountRepository = $discountRepository;
    }

    public function paginate($request){
        $perPage = $request->integer('perpage');
        $condition = [
            'keyword' => addslashes($request->input('keyword')),
        ];
        $paginationConfig = [
            'path' => 'discounts', 
        ];
        $orderBy = ['discounts.id', 'DESC'];
        $relations = ['products', 'variants'];

        $discounts = $this->discountRepository->pagination(
            column: ['*'],
            condition: $condition,
            perPage: $perPage,
            extend: $paginationConfig,
            orderBy: $orderBy,
            relations: $relations,
        ); 
        return $discounts;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payload = $request->only(['name']);
            $attribute = $this->discountRepository->create($payload);
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
            $attribute = $this->discountRepository->findById($id);
            $attribute->update($request->only(['name']));
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
            $attribute = $this->discountRepository->delete($id);
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            // echo $e->getMessage();die();
            return false;
        }
    }
}
