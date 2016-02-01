<?php

namespace App\Http\Controllers;

use App\Model\User;

class HomeController extends Controller
{
    public function __construct(
            \App\Service\ShopService $shop
        )
    {
        $this->shop = $shop;
    }

    
    public function index() 
    {
        $shops = $this->shop->all();

        return view("index",[
                "shops" => $shops
            ]);
    }

}
