<?php

namespace App\Services;

use App\Repositories\AttributeRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Class AttributeService
 * @package App\Services
 */
class AttributeService
{
    protected $attributeRepository;
    protected $routerRepository;
    
    public function __construct(
        AttributeRepository $attributeRepository,
    ){
        $this->attributeRepository = $attributeRepository;
    }

    public function paginate($request){
        $perPage = $request->integer('perpage');
        $condition = [
            'keyword' => addslashes($request->input('keyword')),
        ];
        $paginationConfig = [
            'path' => 'attribute.index', 
            'groupBy' => ['name']
        ];
        $orderBy = ['attributes.id', 'DESC'];
        $relations = ['attribute_values'];
        // $joins = [
        //     ['attribute_language as tb2', 'tb2.attribute_id', '=', 'attributes.id'],
        //     ['attribute_catalogue_attribute as tb3', 'attributes.id', '=', 'tb3.attribute_id'],
        // ];

        $attributes = $this->attributeRepository->pagination(
            column: ['id','name'],
            condition: $condition,
            perPage: $perPage,
            extend: $paginationConfig,
            orderBy: $orderBy,
            // relations: $relations,
        ); 
        return $attributes;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payload = $request->only(['name']);
            $attribute = $this->attributeRepository->create($payload);
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
            $attribute = $this->attributeRepository->findById($id);
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
            $attribute = $this->attributeRepository->delete($id);
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
