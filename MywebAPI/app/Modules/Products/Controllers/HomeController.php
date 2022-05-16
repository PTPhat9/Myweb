<?php

namespace Myweb\Modules\Products\Controllers;

use Illuminate\Http\Request;
use Myweb\Http\Controllers\Controller;
use Myweb\Contracts\Products\Products;

class HomeController extends Controller
{   
    protected $products;

    public function __construct(Products $products) 
    {
        $this->products = $products;
    }

    function index(Request $request)
    {   
        $list = $this->products->getFeaturedProducts($request->limit);
        return $list;
    }
}
