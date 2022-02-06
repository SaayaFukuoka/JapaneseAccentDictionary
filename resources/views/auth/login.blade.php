@extends('layouts.header')

@section('title', $title)

 
@section('content')
<main> 
  <h1 class="page_title">Sign In</h1>
  <div class="flex">
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
    <div>
      <a href="{{ route('register') }}" class="button_common">
        Register
      </a>
    </div>
  </div>
</main>
@endsection