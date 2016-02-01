<?php

namespace App\Service;

use App\Model\Shop;

use Illuminate\Support\Collection;

class ShopService {

    public function all() {
        return Shop::all();
    }

}