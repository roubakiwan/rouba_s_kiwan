@extends('admin.layouts.app')
@section('content')
    <div class="hpanel">
        <div class="panel-body">
            <form action="{{route('products.store')}}" method="post"  enctype="multipart/form-data"  id="loginForm">
                @csrf
                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input type="text" placeholder="pleas the name" title="Please enter you username" required="" value="" name="name" id="username" class="form-control @error('name') is-invalid @enderror">
                    @if(@$errors->has('name')) @endif
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="form-group">
                    <label class="control-label" an for="username">image</label>
                    <input type="file" title="Please enter the images"  multiple="multiple" required="" value="" name="image" id="username" class="form-control @error('image') is-invalid @enderror">
                    @if($errors->has('image')) @endif
                    <span class="text-danger">{{$errors->first(' image')}}</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input type="text" title="Please enter your password" placeholder="Please enter you quality" required="" value="" name="quality" id="password" class="form-control @error('quality') is-invalid @enderror">
                    @if($errors->has('quality')) @endif
                    <span class="text-danger">{{$errors->first('quality')}}</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input type="number" title="Please enter your password" placeholder="Please enter you price" required="" value="" name="price" id="password" class="form-control @error('price') is-invalid @enderror">
                    @if($errors->has('price')) @endif
                    <span class="text-danger">{{$errors->first('price')}}</span>
                </div>
                <div class="checkbox login-checkbox">
                    <label>
                        <input type="checkbox" class="i-checks"> Remember me </label>
                    <p class="help-block small">(if this is a private computer)</p>
                </div>
                <button class="btn btn-success btn-block loginbtn">Login</button>
                <a class="btn btn-default btn-block" href="#">Register</a>
            </form>
        </div>
    </div>
@endsection
