<?php

namespace Customers\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\BackEnd\Store;


class CustomersController extends Controller
{
    public function index(Store $request){
        return view('customers::backend.index');
    }
}
