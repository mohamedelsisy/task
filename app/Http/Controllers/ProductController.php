<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $product = Product::with('options')->get();

            return  response()->json($product, '200');

        }catch (Exception $exception){
            return  response()->json($exception, '500');
        }
    }

    public function task1(){
        try {

            $products = Product::has('colors')->has('sizes')->get();
            return response()->json($products, 200);

        }catch (Exception $exception){
            return  response()->json('Error', 500);
        }

    }

    public function task2(){
        try {

            $products = Product::has('colors')->has('types')->get();
            return response()->json($products, 200);

        }catch (Exception $exception){

            return  response()->json('Error', 500);
        }

    }

    public function task3(){
        try {

            $products = Product::has('sizes')->has('types')->get();
            return response()->json($products, 200);

        }catch (Exception $exception){

            return  response()->json('Error', 500);
        }

    }

    public function task4(){
        try {

            $products = Product::has('colors')->has('sizes')->has('types')->get();
            return response()->json($products, 200);

        }catch (Exception $exception){

            return  response()->json('Error', 500);
        }

    }

    public function task5(){

        try {

            $products = Product::whereHas('colors')->doesntHave('sizes')->doesntHave('types')->get();
            return response()->json($products, 200);

        }catch (Exception $exception){

            return  response()->json('Error', 500);
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::create([
            'name'      => $request->name,
        ]);
        $options = ProductOption::create([
            'product_id'    => $product->id,
            'type'          => $request->type,
            'value'         => $request->value
        ]);
        return  response()->json($product, 201);
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
