@extends('template')

@section('main-content')
<br/>
    <form class="form" action="{{ url('/register/simpan') }}" method="post">
        @csrf
        <h1>Register</h1>
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
                <button class="btn btn-success" type="submit">register</button>
                <a class="btn btn-primary" href="{{  url('/') }}">login</a>
            </div>
        </div>
    </form>
@endsection