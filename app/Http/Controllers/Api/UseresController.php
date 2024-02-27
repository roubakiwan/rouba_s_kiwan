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
use App\Traits;
use Illuminate\Support\Facades\DB;

class UseresController extends Controller
{
    private static function upload(UsersRequest $request)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d=User::get();
        return response()->json($d);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $v=User::all();
        return response()->json($v);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersRequest $request)
    {
        $u=Usere::create($request->all());
        self::upload($request);
        return response()->json($u);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $h=where('id',$id)->first();
        return response()->json($h);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $n=Usere::where('id',$id)->first();
        return response()->json($n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsersRequest $request, string $id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $updated = $user->update($request->except('image'));
            $image = $this->image($request, 'image', 'user');
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
        $o=Usere::where('id',$id)->first();
        $o->destroy();
    }
}
