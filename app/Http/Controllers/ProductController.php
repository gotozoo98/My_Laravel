<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_img;


use App\Http\Controllers\FilesController;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = FilesController::imgUpload($request->product_img, 'product');

        $product = Product::create([
            'img_path' => $path,
            'product_name' =>  $request->product_name,
            'product_detail' =>  $request->product_detail,
            'product_qty' =>  $request->product_qty,
            'product_price' =>  $request->product_price,
        ]);

        if($request->hasfile('second_img')){
            foreach($request->second_img as $index => $element){
                $path = FilesController::imgUpload($element,'product');
                Product_img::create([
                    'img_path' => $path,
                    'product_id' => $product->id,
                ]);
            }

        }

        return redirect('/product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
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
        $product = Product::find($id);
        if ($request->hasfile('product_img')){

            FilesController::deleteUpload($product->img_path);
            $path = FilesController::imgUpload($request->product_img, 'product');
            $product->img_path = $path;
        }

        //次要圖片處理
        if($request->hasfile('second_img')){
            foreach ($request->second_img as $index => $element){
                $path = FilesController::imgUpload($element, 'product');
                Product_img::create([
                    'img_path' => $path,
                    'product_id' => $product->id,
                ]);
            }
        }



        $product->product_name = $request->product_name;
        $product->product_detail = $request->product_detail;
        $product->product_qty = $request->product_qty;
        $product->product_price = $request->product_price;
        $product->save();

        return redirect('/product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $imgs = Product_img::where('product_id',$id)->delete();

        FilesController::deleteUpload($product->img_path);
        $product->delete();

        return redirect('/product');

    }


    public function delete_img($img_id){
        $img = Product_img::find($img_id);
        FilesController::deleteUpload($img->img_path);
        $product_id = $img->product_id;
        $img->delete();

        return redirect('/product/edit/'.$product_id);
    }
}


