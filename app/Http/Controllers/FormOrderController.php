<?php

namespace App\Http\Controllers;
use App\Models\region;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormOrderController extends Controller
{
    
    public function create(){
        $regions = region::all();

        return view('FormOrder.create', compact('regions'));
    }


    // $data примет данные из формы заказа 
    public function store(){

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
            'created_at' => date('Y-m-d'),
            'comments' => 'string',
        ]);

        Order::create($data);

        return redirect()->route('home');
    }

    
}
