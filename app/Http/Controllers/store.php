<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class store extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title =  'Store';
        $products =  Product::all();
        return view('store.index',compact(['title','products']));
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
       //Validation
       $this->validate($request,[
        'Name'=>'required',
        'sku'=>'required',
        'Price'=>'required',
        'Description' =>'required'
        ]);
    //count view 
    
        $product = new Product;
        $product->Name = $request->get('Name');
        $product->sku = $request->get('sku');
        $product->Price = $request->get('Price');
        $product->Description = $request->get('Description');
        $product->viewcount = $request->get('viewcount');
        $product->save();
        return redirect('/products')->with('success','Product Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
