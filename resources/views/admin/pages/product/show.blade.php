
@extends('admin.layouts.app')
@section('content')
    <div class="hpanel">
        <div class="panel-body">
            <form  id="loginForm">
                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input placeholder="{{$a->name}}" type="text"   required=""  name="name" id="username" class="form-control">
                    <span class="help-block small">Your unique username to app</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input placeholder="{{$a->quality}}" type="text" required=""  name="quality" id="password" class="form-control">
                    <span class="help-block small">Yur strong password</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input placeholder="{{$a->price}}" type="number"   required=""  name="price" id="password" class="form-control">
                    <span class="help-block small">Yur strong password</span>
                </div>
                <div class="checkbox login-checkbox">
                    <label>
                        <input type="checkbox" class="i-checks"> Remember me </label>
                    <p class="help-block small">(if this is a private computer)</p>
                </div>
                <button class="btn btn-success btn-block loginbtn">Go Back</button>
                <a class="btn btn-default btn-block" href="#">Register</a>
            </form>
        </div>
    </div>
@endsection
