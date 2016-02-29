<?php

namespace App\Service;

use App\Model\Shop;
use Validator;

use Illuminate\Support\Collection;

class ShopService {

    public function all() {
        return Shop::all();
    }

    public function get($shopId) {
        // 店舗情報を取得
    	return Shop::find($shopId);
    }

    /**
     * 店舗の情報を追加
     * @param unknown $input
     */
    public function store($input) {
    	// shopオブジェクトを作成
    	$shop = Shop::create();
    	
    	// 値の格納
    	$shop->name = $input->name;
    	$shop->access = $input->access;
    	$shop->description = $input->description;
    	$shop->short_description = $input->short_description;
    	$shop->business_hours = $input->business_hours;
    	$shop->telephone = $input->telephone;
    	$shop->wechat_no = $input->wechat_no;
    	$shop->seat_counts = $input->seat_counts;
    	$shop->stylist_counts = $input->stylist_counts;
    	$shop->latitude = $input->latitude;
    	$shop->longitude = $input->longitude;
    	$shop->address = $input->address;
    	
    	// DBに保存
    	$shop->save();
    	
        return $shop;
    }

    /**
     * 更新
     * @param \Illuminate\Http\Request $input
     */
    public function update($input) {
        // 店舗の情報を更新
        $shop = Shop::find($input->id);
        
    	// 値の格納
    	$shop->name = $input->name;
    	$shop->access = $input->access;
    	$shop->description = $input->description;
    	$shop->short_description = $input->short_description;
    	$shop->business_hours = $input->business_hours;
    	$shop->telephone = $input->telephone;
    	$shop->wechat_no = $input->wechat_no;
    	$shop->seat_counts = $input->seat_counts;
    	$shop->stylist_counts = $input->stylist_counts;
    	$shop->latitude = $input->latitude;
    	$shop->longitude = $input->longitude;
    	$shop->address = $input->address;
    	
        // DBを更新
        $shop->update();
        
        return $shop;
    }

    /**
     * バリデーション
     * @param \Illuminate\Http\Request $input
     */
    public function validate($input) {
        // Validatorクラスを使って、リクエストを認証し、フォームのデータを制御

        // set rules
    	$rules = [
    		'name' => 'required|max:255'	
    		,'access' => 'max:255'
    		,'description' => 'max:255'
    		,'short_description' => 'max:255'
    		,'business_hours' => 'max:255'
    		,'telephone' => 'max:255'
    		,'wechat_no' => 'max:255'
    		,'seat_counts' => 'integer'
			,'stylist_counts' => 'integer'
    		,'latitude' => 'numeric'
    		,'longitude' => 'numeric'
    		,'address' => 'max:255'
    	];
    	return Validator::make($input, $rules);
    }

}