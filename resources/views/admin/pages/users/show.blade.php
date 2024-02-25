
@extends('admin.layouts.app')
@section('content')
    <div class="hpanel">
        <div class="panel-body">
            <form  id="loginForm">
                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input placeholder="{{$f->name}}" type="text"   required=""  name="name" id="username" class="form-control">
                    <span class="help-block small">Your unique username to app</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input placeholder="{{$f->age}}" type="text" required=""  name="age" id="password" class="form-control">
                    <span class="help-block small">Yur strong password</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input placeholder="{{$f->job}}" type="number"   required=""  name="job" id="password" class="form-control">
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
