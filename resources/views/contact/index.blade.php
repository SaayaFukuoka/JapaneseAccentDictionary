@extends('layouts.header')
 
@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf

    <div>
        <label>email</label>
        <input
            name="email"
            value="{{ old('email') }}"
            type="text">
        @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
    </div>
    <div>
        <label>title</label>
        <input
            name="title"
            value="{{ old('title') }}"
            type="text">
        @if ($errors->has('title'))
            <p class="error-message">{{ $errors->first('title') }}</p>
        @endif
    </div>
    <div>
        <label>inquiry</label>
        <textarea name="body">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
        @endif
    </div>
    <div>
        <button type="submit">
            Check Input Contents
        </button>
    </div>
</form>
@endsection