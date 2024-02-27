<?php
namespace App\Traits;
use App\Models\Image;
use App\Models\Product;

trait UploadImages
{
    public static function uploade($request)
    {
        $product = Product::create($request->all());
        foreach ($request->file('image') as $image) {
            $filename = time() . "." . $image->getClientOriginalName();
            $image->move(public_path('image'), $filename);
            $image = new Image;
            $image->rcs = 'images/' . $filename;
            $product->images()->save($image);
        }
        return response()->json($product);
           }
//
}
