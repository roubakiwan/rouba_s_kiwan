<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UsersRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use App\Models\Usere;
use Illuminate\Http\Request;

class UseresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d=User::query()->get();
        return response()->json($d);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $v=User::query()->all();
        return response()->json($v);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersRequest $request)
    {  $data=$request->all();
        $image=new Image;
        $getImage=$request->file('image');
        $imageName=time().".".$getImage->extension();
        $image->move(public_path('image'),$imageName);

        $user=User::query()->create($data);
        $user->image()->save($image);
        return response()->json([
            'success'=>true,
            'message'=>"successful",
            "data"=>$user
        ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $h=query()->where('id',$id)->first();
        return response()->json($h);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $n=Usere::query()->where('id',$id)->first();
        return response()->json($n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ttt=Usere::query()->where('id',$id)->first();
        $ttt->update();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $o=Usere::query()->where('id',$id)->first();
        $o->destroy();
    }
}
