<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    private static function upload(ProductRequest $request)
    {
    }

    private static function uploade(ProductRequest $request)
    {
    }

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
    {
        $p=Product::create($request->all());
        self::uploade($request);
        return response()->json($p);

      }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $f=Product::where('id',$id)->first();
        return response()->json($f);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $l=Product::where('id',$id)->first();
        return response()->json($l);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {

        $pro = Product::where('id', $id)->first();
        if ($pro) {
            $updated = $pro->update($request->except('image'));
            $image = $this->image($request, 'image', 'product');
            if ($updated && $image) {
                DB::commit();
                return $this->returnSucess('the upload was completed successfully');
            } else {
                return $this->returnError('there is an error the upload process');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $w=Product::where('id',$id)->first();
        $w->destroy();
    }
}
