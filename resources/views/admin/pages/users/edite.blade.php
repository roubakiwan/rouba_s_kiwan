@extends('admin.layouts.app')
@section('content')
    <div class="hpanel">
        <div class="panel-body">
            <form action="{{route('users.update',$k->id)}}" method="post" id="loginForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input value="{{$k->name}}" type="text" placeholder="Please enter the name"  required="" value="" name="name" id="username" class="form-control">
                    <span class="help-block small">Your unique username to app</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input value="{{$k->age}}" type="text"  placeholder="Please enter the age" required="" value="" name="age" id="password" class="form-control">
                    <span class="help-block small">Yur strong password</span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input value="{{$k->job}}" type="number"  placeholder="Please enter the job" required="" value="" name="job" id="password" class="form-control">
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
