@extends('enter.main')

@section('title', 'Login')

@section('content')
    <div class="row mt-5">
        <div class="col-2 offset-5">
            <h1>Login</h1>
        </div>
        <div class="col-6 offset-3 pt-5">
            <form action="{{route('login.index')}}" method="post">
                @csrf
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email"  name="email" id="form2Example1" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-2">
                    <input type="password" name="password" id="form2Example2" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>
                <div class="form-outline mb-4">
                    <a href="{{ route('register')}}" >Register Page</a>
                </div>
                <div class="form-group">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init 
                        class="btn btn-primary btn-block mb-4">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
