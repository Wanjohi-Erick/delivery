<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }

    public function getOne(Request $request, $id) {
        return Products::find($id);
    }

    public function store(Request $request)
    {
        $product = new Products();

        $product-> name = $request->post("Name");
        $product-> description = $request->post("Description");
        $product-> price = $request->post("Price");
        $product-> stars = $request->post("Stars");
        $product-> image_url = $request->post("image_url");
        $product-> location = $request->post("Location");
        $product-> type_id = $request->post("type_id");

        if ($product->save()) {
            return response()->json([
                "code"=> 200,
                "message"=>"success"
            ]);
        } else {
            return response()->json([
                "code"=> 403,
                "message"=>"failed"
            ]);
        }

    }

    public function show(Products $products)
    {
        return $products;
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);

        if (!$product) {
            return response()->json([
                "code"=> 404,
                "message"=>"Product not found"
            ]);
        }

        $product-> name = $request->post("Name");
        $product-> description = $request->post("Description");
        $product-> price = $request->post("Price");
        $product-> stars = $request->post("Stars");
        $product-> image_url = $request->post("image_url");
        $product-> location = $request->post("Location");
        $product-> type_id = $request->post("type_id");

        if ($product->save()) {
            return response()->json([
                "code"=> 200,
                "message"=>"success"
            ]);
        } else {
            return response()->json([
                "code"=> 403,
                "message"=>"failed"
            ]);
        }
    }


    public function destroy($id)
    {
        $product = Products::find($id);
        if ($product->delete()) {
            return response() -> json([
               "code" => 200,
                "message" => "success"
            ]);
        } else {
            return response() -> json([
               "code" => 403,
               "message" => "failed"
            ]);
        }
    }
}
