@extends('layouts.header')

@section('title', $title)
 
@section('content')
<main class="main_common">
    <div class="flex">
        <div>
            <h1 class="page_title">{{ $title }}</h1>
            <form method="POST" action="{{ route('contact.confirm') }}">
                @csrf
                <div>
                    <label>
                        email
                        <div class="input_space">
                            <input name="email" value="{{ old('email') }}" type="text" class="input_size">
                                @if ($errors->has('email'))
                                    <p class="error-message">{{ $errors->first('email') }}</p>
                                @endif
                        </div>  
                    </label>
                </div>
                <div>
                    <label>
                        title
                        <div class="input_space">
                            <input name="title" value="{{ old('title') }}" type="text" class="input_size">
                                @if ($errors->has('title'))
                                    <p class="error-message">{{ $errors->first('title') }}</p>
                                @endif
                        </div>
                    </label>
                </div>
                <div>
                    <label>
                        inquiry
                        <div class="input_space">
                            <textarea name="body" cols="42" rows="6">{{ old('body') }}</textarea>
                                @if ($errors->has('body'))
                                    <p class="error-message">{{ $errors->first('body') }}</p>
                                @endif
                        </div>
                    </label> 
                </div>
                <div class="button_common_section">
                    <a class="button_common">
                        <span>
                            <button type="submit" class="button_reset">next</button>
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection