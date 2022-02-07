@extends('layouts.header')
 
@section('title', $title)

@section('content')
<main class="main_common">
  <div class="flex">
    <div>
      <h1 class="page_title">{{ $title }}</h1>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
          <label>
            name
            <div class="input_space">
              <input type="text" name="name" class="input_size">
            </div>
          </label>
        </div>
        <div>
          <label>
            email
            <div class="input_space">
              <input type="email" name="email" class="input_size">
            </div>
          </label>
        </div>
        <div>
          <label>
            password
            <div class="input_space">
              <input type="password" name="password" class="input_size">
            </div>
          </label>
        </div>
        <div>
          <label>
            confirm password
            <div class="input_space">
              <input type="password" name="password_confirmation" class="input_size">
            </div>
          </label>
        </div>
        <div class="button_common_section">
          <a class="button_common"><span><input type="submit" value="next" class="button_reset"></span></a>
        </div>
      </form>
    </div>  
    <div class="or">
      <a>or</a>
    </div>
    <div class="button_register_section">
      <a href="{{ route('login') }}" class="button_register">
        <span>Sign In</span>
      </a>
    </div>
  </div>
</main>
@endsection