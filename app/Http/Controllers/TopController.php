<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class TopController extends Controller
{
    public function index()
    {

        // 全件取得の場合
        // $products = DB::table('products')
        //     ->join('categories', 'categories.id', '=', 'products.category')
        //     ->select('products.*', 'categories.name')
        //     ->orderBy('products.created_at', 'desc')->paginate(8);
        // dd($products);


        // 1:食品  
        $foods = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'categories.name')
        ->where('categories.id', 1)
        ->orderBy('products.created_at', 'desc')->paginate(8);

        //2:生活       
        $lives = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'categories.name')
        ->where('categories.id', 2)
        ->orderBy('products.created_at', 'desc')->paginate(8);

         //3:ファッション 
         $fashions = DB::table('products')
         ->join('categories', 'categories.id', '=', 'products.category')
         ->select('products.*', 'categories.name')
         ->where('categories.id', 3)
         ->orderBy('products.created_at', 'desc')->paginate(8);

         //4:おもちゃ 
         $toys = DB::table('products')
         ->join('categories', 'categories.id', '=', 'products.category')
         ->select('products.*', 'categories.name')
         ->where('categories.id', 4)
         ->orderBy('products.created_at', 'desc')->paginate(8);

         //5:その他
         $others = DB::table('products')
         ->join('categories', 'categories.id', '=', 'products.category')
         ->select('products.*', 'categories.name')
         ->where('categories.id', 5)
         ->orderBy('products.created_at', 'desc')->paginate(8);


         return view('top', compact('foods','lives','fashions','toys','others'));

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