@extends('layouts.header')
 
@section('content')
<h1 class="title_login">Sign In</h1>
<main class="main_login"> 
  <div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label>
              email:
              <input type="email" name="email">
            </label>
        </div>
        <div>
            <label>
              password:
              <input type="password" name="password" >
            </label>
        </div>
        <input type="submit" value="Sign in" class="login_button">
    </form>
  </div>
  <div class="or">
    <a>or</a>
  </div>
  <div class="login_button">
    <a href="{{ route('register') }}" class="login_button">
      Register
    </a>
  </div>
</main>
@endsection