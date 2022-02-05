@extends('layouts.header')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <div>
        <label>email</label>
        {{ $inputs['email'] }}
        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">
    </div>
    <div>
        <label>title</label>
        {{ $inputs['title'] }}
        <input
            name="title"
            value="{{ $inputs['title'] }}"
            type="hidden">
    </div>
    <div>
        <label>inquiry</label>
        {!! nl2br(e($inputs['body'])) !!}
        <input
            name="body"
            value="{{ $inputs['body'] }}"
            type="hidden">
    </div>
    <div>
        <button type="submit" name="action" value="back">
            Check Input Contents
        </button>
    </div>
    <div>
        <button type="submit" name="action" value="submit">
            Send
        </button>
    </div>
</form>
@endsection