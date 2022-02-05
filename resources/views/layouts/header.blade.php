@extends('layouts.default')
 
@section('header')
<header>
    <div class="logo">
        <a href="{{ route('words.index') }}">JAD</a>
    </div>
    <div class="header_nav">
        <ul class="haeder_nav_first">
            <li>
                <a href="{{ route('words.index') }}">
                    Home
                </a>
            </li>
            <li class="menu">
                <label for="menu_bar01">Categories</label>
                <input type="checkbox" id="menu_bar01" />
                <ul id="links01">
                    @foreach($categories as $category)
                    <li><a href="{{ route('words.category', $category) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('likes.index') }}">
                    MyDictionary
                </a>
            </li>
            <li>
                @if(Auth::check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
                @else
                <a href="{{ route('login') }}">
                    Login
                </a>
                @endif
            </li>
        </ul>
    </div>
</header>
@endsection
@section('footer')
<footer>
    <ul class="footer_nav">
            <li>
                <a href="{{ route('words.index') }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}">
                    Contact
                </a>
            </li>
    </ul>
    <p class="copyrights"><small>JAD&copy; All Rights Reserved</small></p>
</footer>
@endsection