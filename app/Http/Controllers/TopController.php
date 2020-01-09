<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;




class TopController extends Controller
{
    public function index()
    {
        $data=[
          // 'products' => Product::all()//全データ取得
          'products' => \App\Product::orderBy('created_at', 'desc')->paginate(5)//最新から５件取得
        ];
        return view('top', $data);

        // $product = Product::all();   // 全データ取得
        // return view('top', [
        //     "products" => $product
        // ]);
    }

    public function view()
    {
        $data = [
          'msg' => 'こんにちは、世界！',
          'test' => 'TopController経由のテスト表示'          
        ];

        $data2=[
          // 'products' => Product::all()//全データ取得
          'products' => \App\Product::orderBy('created_at', 'desc')->paginate(5)//最新から５件取得
        ];

        return view('hello.view', $data,$data2);
      }

}
