<?php

namespace App\Repositories;

use App\Models\Attribute;
use App\Repositories\BaseRepository;

/**
 * Class UserService
 * @package App\Services
 */
class AttributeRepository extends BaseRepository
{
    protected $model;

    public function __construct(
        Attribute $model
    ){
        $this->model = $model;
    }

    public function getAttributeById(int $id){
        return $this->model->findOrFail($id);
    }

    // public function searchAttributes(string $keyword = '', array $option = [], int $languageId){
    //     return $this->model->whereHas('attribute_catalogues', function($query) use ($option){
    //         $query->where('attribute_catalogue_id', $option['attributeCatalogueId']);
    //     })->whereHas('attribute_language', function($query) use ($keyword){
    //         $query->where('name', 'like', '%'.$keyword.'%');
    //     })->get();
    // }

}
