<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoriesRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    private static function upload(CategoriesRequest $request)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $categories=Category::with('subcategories.products')->get();
      return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $j=Product::all();
        return response()->json($j);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesRequest $request)
    {
        $ca=Category::query()->create($request->all());
        self::upload($request);
        return response()->json($ca);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id )
    {
        $category=Category::with(['product','user'])->whereHas('user',function ($query){
        $query-> where('name','like','%a%');
             })->get();
        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $q=Category::where('id',$id)->first();
        return response()->json($q);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesRequest $request, string $id)
    {
        $s=Category::where('id',$id)->first();
        if ($s){
            $updated=$s->update($request->except('image'));
            $image=$this->image($request,'image','category');
            if ($updated && $image) {
                DB::commit();
                return $this->returnSucess('the upload was completed successfully');
            }
            else{
                return  $this->returnError('there is an error the upload process');
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $w=Category::where('id',$id)->first();
        $w->destroy();
    }
}
