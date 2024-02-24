<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoriesRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categoryId)
    {   $category=Category::query()->findOrFail($categoryId);
        $products=$category->products()->whereHas('user',function ($query)
        {
            $query->where('name','like','%a%');
        })->get();
        return response()->json($products,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $j=Product::query()->all();
        return response()->json($j);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesRequest $request)
    {   $data=$request->all();
        $image=new Image;
        $getImage=$request->file('image');
        $imageName=time().".".$getImage->extension();
        $image->move(public_path('image'),$imageName);

        $category=Category::query()->create($data);
        $category->image()->save($image);
        return response()->json([
            'success'=>true,
            'message'=>"successful",
            "data"=>$category
        ]);

        $ca=Category::query()->create($request->all());
        return response()->json($ca,201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
        $show=Category::query()->where('id',$id)->first();
        return response()->json($show);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $q=Category::query()->where('id',$id)->first();
        return response()->json($q);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $s=Category::query()->where('id',$id)->first();
        $s->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $w=Category::query()->where('id',$id)->first();
        $w->destroy();
    }
}
