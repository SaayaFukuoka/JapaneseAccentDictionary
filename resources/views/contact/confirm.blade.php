@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_common">
    <div class="flex">
        <div>
            <h1 class="page_title">{{ $title }}</h1>
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div>
                    <label>email:</label>
                    <div class="input_space">
                        {{ $inputs['email'] }}
                        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                    </div>
                </div>
                <div>
                    <label>title:</label>
                    <div class="input_space">
                        {{ $inputs['title'] }}
                        <input name="title" value="{{ $inputs['title'] }}" type="hidden">
                    </div>
                </div>
                <div>
                    <label>inquiry:</label>
                    <div class="input_space">
                        {!! nl2br(e($inputs['body'])) !!}
                        <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                    </div>
                </div>
                <div class="button_common_section">
                    <a class="button_common"><span>
                        <button type="submit" name="action" value="back" class="button_reset">check</button>
                    </span></a>
                </div>
                <div class="button_common_section">
                    <a class="button_send"><span>
                        <button type="submit" name="action" value="submit" class="button_reset">send</button>
                    </span></a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection