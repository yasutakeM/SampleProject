<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        //$product = \App\Product::all(); //Postのデータ全て$postsに代入(データ全件取得)
        $product = Product::all();   // 全データ取得
        return view('admin.index', [
            "products" => $product
        ]);

        //return view('admin.index'); //view('ディレクトリ名.ファイル名');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //
        // $product->image_url = $request->image_url->storeAs('public/images/products', $time.'_'.Auth::user()->id . '.jpg');
        return view('admin.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->productName = $request->input('productName');
        $product->productImage =$request->file('productImage')->getClientOriginalName();
        \Debugbar::info($request->file('productImage')->getClientOriginalName());
        $product->productSubImage =$request->file('productSubImage')->getClientOriginalName();
        $product->category =$request->input('category');
        $product->explanation =$request->input('explanation');//説明
        $product->remaining =$request->input('remaining');//残り
        $product->amount =$request->input('amount');//価格
        $product->save();


        return view('admin.detail')->with('product', $product);


        // return redirect()->route('admin.show', ['id' => $product->id])->with('message', 'Product was successfully created.');

    }

 
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */



    public function show(Product $product)
    {
        //
        // return view('admin.show')->with('product', $product);
        return view('admin.detail')->with('product', $product);
    }

    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        return view('admin.edit', [
            'product' => Product::findOrFail($id)
          ]);
    }
    // public function edit(Product $product)
    // {
    //     return view('admin.edit', compact('poroduct'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $product = Product::find($request->id);
        $form = $request->all();
        unset($form['_token']);//余計なトークンを削除
        $product->fill($form)->save();
        return view('admin.detail')->with('product', $product);
        // return redirect('admin/detail');
        // $product = Product::find($request->id);
        // $product->fill($request->all())->save();
        // return redirect('admin/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Product $product)
    // {
    //     //
    // }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('admin/');
    }

}