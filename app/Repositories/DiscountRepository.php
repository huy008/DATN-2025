<?php

namespace App\Repositories;

use App\Models\Attribute;
use App\Models\Discount;
use App\Repositories\BaseRepository;

/**
 * Class UserService
 * @package App\Services
 */
class DiscountRepository extends BaseRepository
{
    protected $model;

    public function __construct(
        Discount $model
    ){
        $this->model = $model;
    }

    public function getDiscountById(int $id){
        return $this->model->findOrFail($id);
    }
}
