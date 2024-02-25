@extends('admin.layouts.app')
@section('content')
    <div class="hpanel">
        <div class="panel-body">
            <form action="{{route('products.update',$a->id)}}" method="post" id="loginForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input value="{{$q->name}}" type="text" placeholder="Please enter the username"  required="" value="" name="name" id="username" class="form-control">
                    <span class="help-block small">Your unique username to app</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input value="{{$q->quality}}" type="text"  placeholder="Please enter the quality" required="" value="" name="quality" id="password" class="form-control">
                    <span class="help-block small">Yur strong password</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input value="{{$q->source}}" type="text"  placeholder="Please enter the source" required="" value="" name="source" id="password" class="form-control">
                    <span class="help-block small">Yur strong password</span>
                </div>
                <div class="checkbox login-checkbox">
                    <label>
                        <input type="checkbox" class="i-checks"> Remember me </label>
                    <p class="help-block small">(if this is a private computer)</p>
                </div>
                <button class="btn btn-success btn-block loginbtn">update</button>
                <a class="btn btn-default btn-block" href="#">Register</a>
            </form>
        </div>
    </div>
@endsection
