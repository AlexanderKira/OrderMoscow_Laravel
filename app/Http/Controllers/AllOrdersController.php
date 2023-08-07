<?php

namespace App\Http\Controllers;
use App\Models\region;
use App\Models\Order;
use App\Models\price;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AllOrdersController extends Controller
{
    // public function index(){
    //     //нужен еще create_at, нужно переделать БД время создания заказа
    //     // $orders = DB::table('regions')
    //     // ->join('prices', 'regions.region', '=', 'prices.region_id')
    //     // ->join('orders', 'regions.region', '=', 'orders.region_id')
    //     // ->select('orders.id', 'orders.status', 'regions.name', 'prices.price', 'orders.AddSender', 'orders.AddSenderApartment', 'orders.AddSenderfloor', 'orders.PhoneSender', 'orders.NameSender', 'orders.AddRecipient', 'orders.PhoneRecipient', 'orders.RecipientName', 'orders.comments', 'orders.NumberSeats', 'orders.Weight')
    //     // ->orderBy('orders.id', 'desc')
    //     // ->get();
    //     // $price = price::find(1);
    //     // $order = region::all();
    //     // $orders = Order::all();

    //     // $regions = region::all();

    //     $regions = region::find(1);

    //     dd($regions->orders);

    //     //dd($price);
    //     // dd($orders);
    //     //сюда отдадим массив через foreach
    //     return view('AllOrders.index', compact('regions','orders'));
    // }

    public function index(){
        //нужен еще create_at, нужно переделать БД время создания заказа
        // $orders = DB::table('regions')
        // ->join('prices', 'regions.region', '=', 'prices.region_id')
        // ->join('orders', 'regions.region', '=', 'orders.region_id')
        // ->select('orders.id', 'orders.status', 'regions.name', 'prices.price', 'orders.AddSender', 'orders.AddSenderApartment', 'orders.AddSenderfloor', 'orders.PhoneSender', 'orders.NameSender', 'orders.AddRecipient', 'orders.PhoneRecipient', 'orders.RecipientName', 'orders.comments', 'orders.NumberSeats', 'orders.Weight')
        // ->orderBy('orders.id', 'desc')
        // ->get();
        $price = price::all();
        $order = region::all();
        $orders = Order::all();
        $regions = region::all();
        // dd($orders);
        //сюда отдадим массив через foreach
        return view('AllOrders.index', compact('regions','orders'));
    }

    
    public function show(Order $orders){
        return view('AllOrders.show', compact('orders'));
    }


    //форма редактирования данных 
    public function edit(Order $order){
        
        $regions = region::all();
        
        return view('AllOrders.edit', compact('regions', 'order'));
    }


    //метод редактирования
    public function update(Order $order){
        
        $data = request()->validate([
            'NameSender' => 'string',
            'PhoneSender' => 'integer',
            'region_id' => 'integer',
            'AddSender' => 'string',
            'AddSenderApartment' => 'integer',
            'AddSenderfloor' => 'integer',
            'NumberSeats' => 'integer',
            'Weight' => 'integer',
            'RecipientName' => 'string',
            'PhoneRecipient' => 'integer',
            'AddRecipient' => 'string',
            'status' => 'integer',
            'comments' => 'string',
        ]);

        $order->update($data);
 
        return redirect()->route('Orders.index');
    }



    public function destroy(Order $order){
        $order->delete();
        return redirect()->route('Orders.index');
    }
}
