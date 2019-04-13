<?php

namespace App\Services;

use App\Repositories\ReviewRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class reviewService
 * @package App\Services
 */
class ReviewService
{
    protected $reviewRepository;
    protected $userRepository;
    

    public function __construct(
        ReviewRepository $reviewRepository,
    ){
        $this->reviewRepository = $reviewRepository;
    }

    public function paginate($request){
        $condition = [
            'keyword' => addslashes($request->input('keyword')),
        ];
        $perPage = $request->integer('perpage');
        $reviews = $this->reviewRepository->pagination(
            $this->paginateSelect(), 
            $condition, 
            $perPage, 
            ['path' => 'review/index'], 
            ['id', 'DESC'],  
            [],
        );
        return $reviews;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);
            $user = $this->reviewRepository->create($payload);
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

            $payload = $request->except(['_token','send']);
            $user = $this->reviewRepository->update($id, $payload);
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
            $user = $user = $this->reviewRepository->delete($id);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    private function paginateSelect(){
        return [
            'id', 
            'user_id', 
            'product_id',
            'rating',
            'comment',
        ];
    }
}
