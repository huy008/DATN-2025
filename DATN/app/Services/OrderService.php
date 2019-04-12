<?php

namespace App\Services;

use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class OrderService
 * @package App\Services
 */
class OrderService
{
    protected $orderRepository;
    protected $userRepository;
    

    public function __construct(
        OrderRepository $orderRepository,
    ){
        $this->orderRepository = $orderRepository;
    }

    public function paginate($request){
        $condition = [
            'keyword' => addslashes($request->input('keyword')),
        ];
        $perPage = $request->integer('perpage');
        $Orders = $this->orderRepository->pagination(
            $this->paginateSelect(), 
            $condition, 
            $perPage, 
            ['path' => 'order/index'], 
            ['id', 'DESC'],  
            [],
            ['order_items']
        );
        return $Orders;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);
            $user = $this->orderRepository->create($payload);
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
            $user = $this->orderRepository->update($id, $payload);
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
            $user = $user = $this->orderRepository->update($id, ['status' => 'cancelled']);

            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    private function changeUserStatus($post, $value){
        DB::beginTransaction();
        try{
            $array = [];
            if(isset($post['modelId'])){
                $array[] = $post['modelId'];
            }else{
                $array = $post['id'];
            }
            $payload[$post['field']] = $value;
            $this->userRepository->updateByWhereIn('user_catalogue_id', $array, $payload);
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
            'total_price',
            'status',
            'payment_method',
            'phone',
            'address',
        ];
    }
}
