<?php
namespace App\Traits;

use App\Models\Category;
use App\Models\Image;

trait UploadImage
{
    public static function upload($request)
    {
        $data=$request->all();
        $image=new Image;
        $getImage=$request->file('image');
        $imageName=time().".".$getImage->extension();
        $image->move(public_path('image'),$imageName);

        $category=Category::create($data);
        $category->image()->save($image);
        return response()->json([
            'success'=>true,
            'message'=>"successful",
            "data"=>$category
        ]);
    }

}
