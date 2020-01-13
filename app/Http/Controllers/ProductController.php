<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Respons
     * e
     */

    public function index()
    {
        //$product = Product::all(); //Postのデータ全て$postsに代入(データ全件取得)
        // $product = Product::all();   // 全データ取得（古い順）
        // $product = Product::orderBy('created_at', 'desc')->get();//最新から表示する

        //productsテーブルとcategoriesテーブルを結合
        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'categories.name')
        ->orderBy('created_at', 'desc')->paginate(8);

        return view('admin.index', compact('products'));

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
        $category = Category::query()->get();
        return view('admin.create')->with(compact('category'));
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

        $product->fill($request->all())->save();
        
        // $product->productName = $request->input('productName');
        // $product->productImage =$request->file('productImage')->getClientOriginalName();

        // // \Debugbar::info($request->file('productImage')->getClientOriginalName());

        // $product->productSubImage =$request->file('productSubImage')->getClientOriginalName();
        // $product->category =$request->input('category');
        // $product->explanation =$request->input('explanation');//説明
        // $product->remaining =$request->input('remaining');//残り
        // $product->amount =$request->input('amount');//価格
        // $product->save();

        // ここで画像を移動
        $request->file('productImage')->storeAs('public/products', $request->file('productImage')->getClientOriginalName());
        $request->file('productSubImage')->storeAs('public/products', $request->file('productSubImage')->getClientOriginalName());        

        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'categories.name');

        return view('admin.detail')->with('product', $product,$products);
    }

 
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */


    // public function show(Product $product)
    // {
    //     $product = Product::find($request->id);
    //     return view('admin.detail')->with('product', $product);
    // }

    public function show(Request $request)
    {
        $product = Product::findOrFail($request->id);
        return view('show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    // public function edit($id)
    // {
    //     return view('admin.edit', [
    //         'product' => Product::findOrFail($id)
    //       ]);
    //     //   \Debugbar::info(Product::findOrFail($id));          
    // }

    public function edit($id) {

        $category = Category::query()->get();

        // $products = DB::table('products')
        // ->join('categories', 'categories.id', '=', 'products.category')
        // ->select('products.*', 'categories.name')
        // ->orderBy('products.created_at', 'desc');

        return view('admin.edit')->with([
            'product' => Product::findOrFail($id),
            'category' => Category::query()->get(),
            // compact('category')
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

    public function update(Request $request)
    {
        // idを元にレコードを検索して$articleに代入
        $product = Product::find($request->id);
        // editで編集されたデータを$productにそれぞれ代入する
        // $product->productName = $request->productName;

        // $product->productImage = $request->file('productImage')->getClientOriginalName();
        // $product->productSubImage = $request->file('productSubImage')->getClientOriginalName();

        // $product->category = $request->category;
        // $product->explanation = $request->explanation;
        // $product->amount = $request->amount;


        // 保存
        // $product->save();
        // $product = Product::find($request->id);


        // 画像の制御処理
        $filename = '';
        if (is_null( $request->file('productImage') )) {
            $filename = $request->input('productImage_h');
        } else {
            //ファイル名を取得
            $filename = $request->file('productImage')->getClientOriginalName();
            // ファイルの保存
            $request->file('productImage')->storeAs('public/products',$filename);
        }

        $subfilename = '';
        if (is_null( $request->file('productSubImage') )) {
            $subfilename = $request->input('productSubImage_h');
        } else {
            //ファイル名を取得
            $subfilename = $request->file('productSubImage')->getClientOriginalName();
            // ファイルの保存
            $request->file('productSubImage')->storeAs('public/products', $subfilename);
        }


        $storedata =  array_replace($request->all(), array('productImage' => $filename),array('productSubImage' => $subfilename));
        // dd($storedata);
        $product->fill($storedata)->save();
        // \Debugbar::info($request->all());
        $category = Category::query()->get();

        return view('admin.detail')->with('product', $product ,$category);
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
    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->id)->delete();
        // $product->delete();
        return redirect('admin/');
    }

}
