<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PriceDetailController;
use App\Http\Controllers\ProductRepairController;
use App\Http\Controllers\ProductBrendController;
use App\Http\Controllers\TypeRepairController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/role', [RoleController::class,'index']);
Route::post('/role', [RoleController::class,'store']);
Route::get('/role/{id}', [RoleController::class,'show']) ->where('id', '[0-9]+');
Route::get('/role/{name}', [RoleController::class,'showbyName'])->where('name', '[a-zA-Z]+');;
Route::get('/roleusers/{name}',[RoleController::class,'showUsers'])->where('name', '[a-zA-Z]+');;
Route::put('/role/{id}', [RoleController::class,'update']);
Route::delete('/role/{id}', [RoleController::class,'destroy']);

Route::get('/order', [OrderController::class,'index']);
Route::post('/order', [OrderController::class,'store']);
Route::get('/order/{id}', [OrderController::class,'show']);
Route::put('/order/{id}', [OrderController::class,'update']);
Route::delete('/order/{id}', [OrderController::class,'destroy']);
Route::delete('/order/{order_id}/remove_pricedetail/{pricedetail_id}', [OrderController::class,'removePriceDetail']);
Route::delete('/order/{order_id}/remove_typerepair/{typerepair_id}', [OrderController::class,'removeTypeRepair']);
Route::post('/order/add_pricedetail', [OrderController::class,'addPriceDetail']);
Route::post('/order/add_typerepair', [OrderController::class,'addTypeRepair']);
Route::get('orderuser/{id}', [OrderController::class,'showAllbyUserId']);// получаем все ордера по id юзера
Route::get('orderwithchilds', [OrderController::class,'getAllOrdersWithChilds']);// получаем все ордера


Route::get('/message', [MessageController::class,'index']);
Route::post('/message', [MessageController::class,'store']);
Route::get('/message/{id}', [MessageController::class,'show']);
Route::put('/message/{id}', [MessageController::class,'update']);
Route::delete('/message/{id}', [MessageController::class,'destroy']);
Route::get('/message/user/{id}', [MessageController::class,'showbyUserId']);


Route::get('/category', [CategoryController::class,'index']);
Route::post('/category', [CategoryController::class,'store']);
Route::get('/category/{id}', [CategoryController::class,'show']);
Route::put('/category/{id}', [CategoryController::class,'update']);
Route::delete('/category/{id}', [CategoryController::class,'destroy']);


Route::get('/status', [StatusController::class,'index']);
Route::post('/status', [StatusController::class,'store']);
Route::get('/status/{id}', [StatusController::class,'show']);
Route::put('/status/{id}', [StatusController::class,'update']);
Route::delete('/status/{id}', [StatusController::class,'destroy']);


Route::get('/price_detail', [PriceDetailController::class,'index']);
Route::get('/price_detailwithchilds', [PriceDetailController::class,'getPriceDetailsWithChild']);
Route::post('/price_detail', [PriceDetailController::class,'store']);
Route::get('/price_detail/{id}', [PriceDetailController::class,'show']);
Route::put('/price_detail/{id}', [PriceDetailController::class,'update']);
Route::delete('/price_detail/{id}', [PriceDetailController::class,'destroy']);


Route::get('/product_repair', [ProductRepairController::class,'index']);
Route::post('/product_repair', [ProductRepairController::class,'store']);
Route::get('/product_repair/{id}', [ProductRepairController::class,'show']);
Route::put('/product_repair/{id}', [ProductRepairController::class,'update']);
Route::delete('/product_repair/{id}', [ProductRepairController::class,'destroy']);



Route::get('/product_brend', [ProductBrendController::class,'index']);
Route::post('/product_brend', [ProductBrendController::class,'store']);
Route::get('/product_brend/{id}', [ProductBrendController::class,'show']);
Route::put('/product_brend/{id}', [ProductBrendController::class,'update']);
Route::delete('/product_brend/{id}', [ProductBrendController::class,'destroy']);


Route::get('/type_repair', [TypeRepairController::class,'index']);
Route::get('/type_repairwithchilds', [TypeRepairController::class,'getTypeRepairsWithChild']);
Route::post('/type_repair', [TypeRepairController::class,'store']);
Route::get('/type_repair/{id}', [TypeRepairController::class,'show']);
Route::put('/type_repair/{id}', [TypeRepairController::class,'update']);
Route::delete('/type_repair/{id}', [TypeRepairController::class,'destroy']);

Route::get('/comment', [CommentController::class,'index']);
// Route::get('/commentwithusers', [CommentController::class,'getCommentsWithUsers']);
Route::get('/commentuser', [CommentController::class,'indexWithUser']);
Route::post('/comment', [CommentController::class,'store']);
Route::get('/comment/{id}', [CommentController::class,'show']);
Route::get('/commentuser/{id}', [CommentController::class,'showWithUser']);
Route::put('/comment/{id}', [CommentController::class,'update']);
Route::delete('/comment/{id}', [CommentController::class,'destroy']);

Route::get('/manufacture', [ManufactureController::class,'index']);
Route::post('/manufacture', [ManufactureController::class,'store']);
Route::get('/manufacture/{id}', [ManufactureController::class,'show']);
Route::put('/manufacture/{id}', [ManufactureController::class,'update']);
Route::delete('/manufacture/{id}', [ManufactureController::class,'destroy']);

Route::get('/model', [ModelController::class,'index']);
Route::post('/model', [ModelController::class,'store']);
Route::get('/model/{id}', [ModelController::class,'show']);
Route::put('/model/{id}', [ModelController::class,'update']);
Route::delete('/model/{id}', [ModelController::class,'destroy']);
Route::get('/modelAll', [ModelController::class,'modelAll']);

Route::get('/user', [UserController::class,'index']);
Route::post('/user', [UserController::class,'store']);
Route::get('/user/{id}', [UserController::class,'show']);
Route::put('/user/{id}', [UserController::class,'update']);
Route::delete('/user/{id}', [UserController::class,'destroy']);
Route::get('/user/show/count', [UserController::class,'count']);

Route::post('user/show/login', [UserController::class,'userByPassword']);// получаем user впо email и парол
Route::get('/userrole/{id}', [UserController::class,'userRole'])->where('id', '[0-9]+');
Route::get('/userrole/{userRole}', [UserController::class,'userRoleAll'])->where('name', '[a-zA-Z]+');;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
