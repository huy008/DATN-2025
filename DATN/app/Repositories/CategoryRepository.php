<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

/**
 * Class UserService
 * @package App\Services
 */
class CategoryRepository extends BaseRepository 
{
    protected $model;

    public function __construct(
        Category $model
    ){
        $this->model = $model;
    }

}
