@extends('admin.layouts.app')
@section('content')
    <div class="hpanel">
        <div class="panel-body">
            <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data" id="loginForm">
                @csrf
                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input type="text"   placeholder="Please enter the name" required="" value="" name="name" id="username" class="form-control @error('name') is-invalid @enderror">
                    @if($errors->has('name')) @endif
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="username">image</label>
                    <input type="file" title="Please enter the images" required="" value="" name="image" id="username" class="form-control @error('image') is-invalid @enderror">
                    @if($errors->has('image')) @endif
                    <span class="text-danger">{{$errors->first('image')}}</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input type="number"  placeholder="Please enter the age" required="" value="" name="age" id="password" class="form-control @error('age') is-invalid @enderror">
                    @if($errors->has('age')) @endif
                    <span class="text-danger">{{$errors->first('age')}}</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input type="text"  placeholder="Please enter the job" required="" value="" name="job" id="password" class="form-control @error('job') is-invalid @enderror">
                    @if($errors->has('job')) @endif
                    <span class="text-danger">{{$errors->first('job')}}</span>
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
