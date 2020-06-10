@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if (@$url == 'admin')
            <div class="card-header">{{   ('Login') }}</div>

            <div class="card-body">
            <form method="POST" action="{{
            route('admin.login.submit') }}">
            @csrf

            @if (session('status'))
            <div class="alert alert-danger">
            {{ session('status') }}
            </div>
            @endif

            <div class="form-group row">
            <label for="npm" class="col-md-4 col-form-
            label text-md-right">{{   ('Username') }}</label>

            <div class="col-md-6">
            <input id="username" type="text" class="form-control @error('username') is-invalid
            @enderror" name="username" value="{{ old('username') }}"
            required autocomplete="username" autofocus>
            
            @error('username')
            <span class="invalid-feedback"


            role="alert">
            
            
            <strong>{{ $username }}</strong>
            </span>
            @enderror 
            </div>
            </div>

            <div class="form-group row">
            <label for="password" class="col-md-4 col-
            form-label text-md-right">{{   ('Password') }}</label>

            <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid
            @enderror" name="password" required autocomplete="current- password">
            
             @error('password')
            <span class="invalid-feedback"

            role="alert">
            
           

            <strong>{{ $message }}</strong>
            </span> 
            @enderror
            </div>
            </div>

            <div class="form-group row">
            <div class="col-md-6 offset-md-4">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="	" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
            <label class="form-check-label"
            for="remember">
            
            

            {{    ('Remember Me') }}
            </label>
            </div> 
            </div>
            </div>

            <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn- 
            primary">
            

            {{   ('Login') }}
            </button> 

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{
            route('password.request') }}">
            {{   ('Forgot Your Password?') }}
            </a>
            @endif
            </div>
            </div>
            </form>
            </div>

            @else
            <div class="card-header">{{   ('Login') }}</div>

            <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
            @csrf

            @if (session('status'))
            <div class="alert alert-danger">
            {{ session('status') }}
            </div>
            @endif

            <div class="form-group row">
            <label for="npm" class="col-md-4 col-form-
            label text-md-right">{{   ('NPM') }}</label>

            <div class="col-md-6"> 
            <input id="npm" type="text" class="form- control @error('email') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required autocomplete="npm" autofocus>
            
            @error('npm')
            <span class="invalid-feedback"

            role="alert">
            
            

            <strong>{{ $message }}</strong>
            </span>
            @enderror 
            </div>
            </div>

            <div class="form-group row">
            <label for="password" class="col-md-4 col- form-label text-md-right">{{   ('Password') }}</label>

            <div class="col-md-6">
            <input id="password" type="password"
            class="form-control @error('password') is-invalid
            @enderror" name="password" required autocomplete="current- password">
            
            @error('password')
            <span class="invalid-feedback"

            role="alert">
            
            

            <strong>{{ $message }}</strong>
            </span>
            @enderror 
            </div>
            </div>

            <div class="form-group row">
            <div class="col-md-6 offset-md-4">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
            <label class="form-check-label"
            for="remember">
            
            

            {{   ('Remember Me') }}
            </label>
            </div> 
            </div>
            </div>

            <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn- 
            primary">
            

            {{   ('Login') }}
            </button> 
            
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{
            route('password.request') }}">
            {{   ('Forgot Your Password?') }}
            </a>
            @endif
            </div>
            </div>
            </form>
            </div>
            @endif
            </div>
            </div>

    </div>
</div>
@endsection
