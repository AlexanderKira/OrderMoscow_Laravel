<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//контроллер любви к замечательному фреймворку
class TestController extends Controller
{
    public function index(){
        return view('test');
    }
}
