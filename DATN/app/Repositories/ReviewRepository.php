<?php

namespace App\Repositories;

use App\Models\Review;
use App\Repositories\BaseRepository;

/**
 * Class UserService
 * @package App\Services
 */
class ReviewRepository extends BaseRepository 
{
    protected $model;

    public function __construct(
        Review $model
    ){
        $this->model = $model;
    }
}
