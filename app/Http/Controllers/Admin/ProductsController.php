<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * from product
     //  $products = DB::table('products')
      // ->leftJoin('categories','categories.id','=','product.category_id')
       //->select([
       // 'products.*',
       // 'categories.name as category_name',

      // ])
      // ->get(); //return acollection of std object = "array"

      $products = product::leftJoin('categories', 'categories.id', '=', 'products.category_id')
      ->select([
        'products.*',
        'categories.name as category_name',
        ])
        ->get();//collection of prooduct model
       
        
       
       //dd($products);
       return view('admin.products.index',[
       'title' => 'products List',
       'products' =>$products]

    );
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product =new product();
       
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->description = $request->input('description');
        $product->short_description = $request->input('short_description');
        $product->price = $request->input('price');
        $product->compare_price= $request->input('compare_price');
        $product->save();
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
