@extends('template')

@section('main-content')

@if (Session::has('success'))
    <p>{{ Session::get('success') }}</p>
@endif

@if (Session::has('error'))
    <p class="text-danger">{{ Session::get('error') }}</p>
@endif

<br/>
    <form class="form" action="{{ url('/login') }}" method="post">
        @csrf
        <h1>Login</h1>
        <div class="row form-group">
            <label class="col-lg-2">username</label>
            <div class="col-lg-4">
                <input class="form-control" type="text" name="username"/>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-lg-2">password</label>
            <div class="col-lg-4">
                <input class="form-control" type="text" name="password"/>
            </div>
        </div>
        <div class="row form-group">
            
            <div class="col-lg-4">
                <button class="btn btn-success" type="submit">login</button>
                <a class="btn btn-primary" href="{{  url('/register') }}">daftar</a>
            </div>
        </div>
    </form>
@endsection