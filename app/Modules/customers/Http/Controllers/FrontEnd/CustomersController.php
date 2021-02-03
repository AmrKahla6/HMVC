<?php

namespace Customers\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\FrontEnd\Store;


class CustomersController extends Controller
{
    public function index(Store $request){
       return view('customers::frontend.index');
    }
}
