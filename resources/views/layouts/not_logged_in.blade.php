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
                    <li><a href="{{ route('words.category', 1) }}">Work</a></li>
                    <li><a href="">Play</a></li>
                    <li><a href="">Trouble</a></li>
                    <li><a href="{{ route('words.category', 4) }}">In the house</a></li>
                    <li><a href="">Personality</a></li>
                    <li><a href="">Romance</a></li>
                    <li><a href="">Health</a></li>
                    <li><a href="">Transpotation</a></li>
                    <li><a href="">Food</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Sport</a></li>
                    <li><a href="">Fashion</a></li>
                    <li><a href="">Five senses</a></li>
                    <li><a href="">Phone</a></li>
                    <li><a href="">Shopping</a></li>
                    <li><a href="">Weather</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('likes.index') }}">
                    MyDictionary
                </a>
            </li>
            <li>
                <a href="{{ route('register') }}">
                    Login
                </a>
            </li>
        </ul>
    </div>
</header>
@endsection
@section('footer')
<footer>
    <p class="copyrights"><small>JAD&copy; All Rights Reserved</small></p>
</footer>
@endsection