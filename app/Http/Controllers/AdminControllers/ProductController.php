<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'Product';
        $products = Product::orderBy('created_at', 'DESC')->get();
        
        return view('admin/products/index', compact('active','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = 'Product';
        return view('admin/products/create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Input::hasfile('image'))
        {
            $destinationPath = public_path('') ."/product_images/";
            $image_name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move($destinationPath, $image_name);
        }

        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->color = $request['color'] ? $request['color']:'-';
        $product->notes = $request['notes'] ? $request['notes']:'-';
        $product->image = Input::file('image')->getClientOriginalName();
        $product->save();

        return response()->json([
            'success' => 'Product has been Uploaded...!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
