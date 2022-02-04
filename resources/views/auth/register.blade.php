@extends('layouts.header')
 
@section('content')
<h1 class="title_login">Register</h1>
<main class="main_login">
  <div>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div>
        <label>
          name:
          <input type="text" name="name">
        </label>
      </div>
      <div>
        <label>
          email:
          <input type="email" name="email">
        </label>
      </div>
      <div>
        <label>
          password:
          <input type="password" name="password">
        </label>
      </div>
      <div>
        <label>
          Confirm Password:
          <input type="password" name="password_confirmation" >
        </label>
      </div>
      <div>
        <input type="submit" value="Start" class="login_button">
      </div>
    </form>
  </div>  
  <div class="or">
    <a>or</a>
  </div>
  <div class="login_button">
    <a href="{{ route('login') }}" class="login_button">
          Login
    </a>
  </div>
</main>
@endsection