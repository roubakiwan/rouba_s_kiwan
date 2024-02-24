<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $m=Product::query()->get();
        return response()->json($m);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $a=Product::query()->all();
        return response()->json($a);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {   $productData=$request->all();
        if ($productData['price']<150){
            return response()->json(['message'=>'false'],400);
        }
      $product=Product::query()->create($request->all());
      $allowedfileExtension=['gif','png','jpg'];
      $files=$request->file('fileName');
      foreach ($files as $file){
          $extension=$file->getClientOriginalExtension();
          $check=in_array($extension,$allowedfileExtension);
          if ($check){
              foreach ($request->fileName as $mediaFiles) {
                  $url = $mediaFiles->store('public/images');
                  $image = new Image();
                  $image->url=$url;
              }
              }
          else {
              return response()->json(['invalid_file_format'], 422);
          }
          }
      $product->image()->save($image);
      $product->save();
      return response()->json($product,201);

      }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $f=Product::query()->where('id',$id)->first();
        return response()->json($f);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $l=Product::query()->where('id',$id)->first();
        return response()->json($l);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pro=Product::query()->where('id',$id)->first();
        $pro->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $w=Product::query()->where('id',$id)->first();
        $w->destroy();
    }
}
