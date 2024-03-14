<?php
namespace App\Services;
use App\Models\Order;
use App\Models\Price_detail;
use App\Models\Type_repair;
use App\Models\User;
class OrderService
{
    public function  getAllOrders()
    {
        return Order::all();
    }

    public function getOrderById($id)
    {
        return Order::find($id);
    }

    public function createOrder( array $data)
    {
        return Order::create($data);
    }

    public function updateOrder(Order $order, array $data)
    {
        $order->update($data);
        return $order;
    }

    public function deleteOrder( $id)
    {
        try{ 
            $order=Order::findOrFail($id);
            if (($order->priceDetails()->count() > 0) || ($order->typeRepairs()->count() > 0)) {
                return response()->json(['error' => 'Cannot delete order with price details or type repairs'], Response::HTTP_BAD_REQUEST);
            }       
            
            
                $order->delete();
                return response()->json(['success' => true]);
            
        } catch(\Exception $e){
            return response()->json(['error' => 'An error occurred'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
    
    }

    public function getOrdersByUserId($userId)
    {
        //  return Order::where('user_id', $userId)->get();
        return $orders = Order::with('priceDetails','typeRepairs')
        ->where('user_id', $userId)->get();
    }

    public function getAllOrdersWithDetails()
    {
      return $orders = Order::with('priceDetails','typeRepairs')->get();
    }

    public function addPriceDetailToOrder($order_id, $pricedetail_id)
    {
        $order=Order::find($order_id);
        if(!$order)
        {
            return ['success' => false, 'message' => 'Order not found'];
        }
      
        try {
            $priceDetail = Price_detail::find($pricedetail_id);

            if (!$priceDetail) {
                return ['success' => false, 'message' => 'Price detail not found'];
            }

            $order->priceDetails()->attach($pricedetail_id);

            return ['success' => true, 'message' => 'Price detail added to order', 'price_detail' => $priceDetail];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => 'Failed to add price detail to order', 'error' => $e->getMessage()];
        }
        
    }

    public function addTypeRepairToOrder($order_id, $typerepair_id)
    {
        $order=Order::find($order_id);
        if(!$order)
        {
            return ['success' => false, 'message' => 'Order not found'];
        }
        try{
            $typeRepair = Type_repair::find($typerepair_id);
            if(!$typeRepair){
                return ['success' => false, 'message' => 'Type repair not found'];
            }
            $order->typeRepairs()->attach($typerepair_id);
            return ['success' => true, 'message' => 'Type repair added to order', 'type_repair' => $typeRepair];
        } catch(\Exception $e){
            return ['success' => false, 'message' => 'Failed to add type repair to order', 'error' => $e->getMessage()];
        }
      
        
          
    }






    public function removePriceDetailFromOrder($order_id, $pricedetail_id)
    {
        $order=Order::find($order_id);
        if(!$order){
            return false;
        }
        return ($order->priceDetails()->detach($pricedetail_id));         
    
    }

    public function removeTypeRepairFromOrder($order_id, $typerepair_id)
    {
        $order=Order::find($order_id);
        if(!$order){
            return false;
        }
        return($order->typeRepairs()->detach($typerepair_id)) ;      
        

    }
}