<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class Customers extends Controller
{
    public function index(Request $request) {
        $customers = Customer::all();
        return response()->json($customers);
    }
}
