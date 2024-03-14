<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Price_detail;
use App\Models\Type_repair;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;
       public function __construct(OrderService $orderService)
       {
        $this->orderService = $orderService;
       }

      public function index()
    {
        $orders= $this->orderService->getAllOrders();
        return response()->json($orders);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);
        $orders= $this->orderService->createOrder($data);
         return response()->json($orders);           
    }

    public function show($id)
    {
        $order = $this->orderService->getOrderById($id);
        return response()->json($order);
    }

    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);
        $order = $this->orderService->updateOrder($order, $data);
        return response()->json($order);     
    }

    public function destroy($id)
    {
       return $orders= $this->orderService->deleteOrder($id);
    //    return response()->json($orders);
    }

    public function showAllbyUserId($id)
    {
        $orders= $this->orderService->getOrdersByUserId($id);
        return response()->json($orders);
    }

    public function getAllOrdersWithChilds()
    {
        $orders= $this->orderService->getAllOrdersWithDetails();
        return response()->json($orders);
    }

    public function addPriceDetail(Request $request)
    {
    
        $data = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'price_detail_id' => 'required|exists:price_details,id',
        ]);
        $res = $this->orderService->addPriceDetailToOrder($data['order_id'], $data['price_detail_id']);
        if ($res['success']) {
            return response()->json($res) ;
        }else{
            return response()->json($res, 400);
        }    
    }

    public function addTypeRepair(Request $request)
    {
        $data = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'type_repair_id' => 'required|exists:type_repairs,id',
        ]);
        $order = $this->orderService->addTypeRepairToOrder($data['order_id'], $data['type_repair_id']);
        if($order['success']) {  
            return response()->json($order);
        }else {
            return response()->json($order, 400);
        }

    }

    public function removePriceDetail($order_id, $pricedetail_id)
    {
       $result = $this->orderService->removePriceDetailFromOrder($order_id, $pricedetail_id);
       return response()->json($result);
    }

    public function removeTypeRepair($order_id, $typerepair_id)
    {
       $result = $this->orderService->removeTypeRepairFromOrder($order_id, $typerepair_id);
       return response()->json($result);
    }
       
}
