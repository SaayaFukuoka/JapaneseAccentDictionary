@extends('layouts.header')

@section('title', $title)

 
@section('content')
<main class="main_login">
    <div class="flex">
      <div>
        <h1 class="page_title">Sign In</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
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
            <div class="button_common_section">
              <a class="button_common"><span><input type="submit" value="next" class="button_reset"></span></a>
            </div>
        </form>
      </div>
      <div class="or">
        <a>or</a>
      </div>
      <div class="button_register_section">
          <a href="{{ route('register') }}" class="button_register">
            <span>Register</span>
          </a>
      </div>
    </div>
  </div>
</main>
@endsection