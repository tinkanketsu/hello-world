<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{

    public function __construct(
            \App\Service\ShopService $shop
        )
    {
        $this->shop = $shop;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = $this->shop->all();

        return view("admin.shops.index", [
                "shops" => $shops
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.shops.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->shop->validate($request->all());

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // 登録
        $shop = $this->shop->store($request);
        
       return redirect(action("ShopController@edit", $shop->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	// idからshop情報を取得
        $shop = $this->shop->get($id);
        
        return view("admin.shops.edit", [
        	"shop" => $shop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->shop->validate($request->all());

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
    	
    	// 更新
        $shop = $this->shop->update($request);
        
        return redirect(action("ShopController@edit", $shop->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
