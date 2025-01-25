<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddTransactionController extends Controller
{
    public function index(){
        return view('transaction');
    }
}
