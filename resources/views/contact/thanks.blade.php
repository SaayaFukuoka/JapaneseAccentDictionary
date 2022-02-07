@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_common">
    <div class="flex">
        <h1 class="page_title">{{ __('Your inquiry has been sent.') }}</h1>
    </div>
</main>
@endsection