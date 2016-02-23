<?php

namespace App\Service;

use App\Model\Shop;

use Illuminate\Support\Collection;

class ShopService {

    public function all() {
        return Shop::all();
    }

    public function get($shopId) {
        // 店舗情報を取得
    }

    public function store($input) {
        // 店舗の情報を追加
    }

    public function update($input) {
        // 店舗の情報を更新
    }

    public function validate($input) {
        // Validatorクラスを使って、リクエストを認証し、フォームのデータを制御
    }

}