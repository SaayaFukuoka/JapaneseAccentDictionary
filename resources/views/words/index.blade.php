@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_home">
    <div class="carousel">
        <div>
            <img src="/images/LRG_DSC073144.jpeg" alt="JapaneseGarden">
            <div class="carousel_content">
                <h1 class="title_home">
                    Japanese<br>
                    Accent<br>
                    Dictionary
                </h1>
            </div>
        </div>
        <div>
            <img src="/images/LRG_DSC07324.jpeg" alt="AutumnLeaves">
            <div class="carousel_content">
                <h1 class="title_home">
                    Japanese<br>
                    Accent<br>
                    Dictionary
                </h1>
            </div>
        </div>
        <div>
            <img src="/images/DSC07040_14.jpg" alt="Mountain">
            <div class="carousel_content">
                <h1 class="title_home">
                    Japanese<br>
                    Accent<br>
                    Dictionary
                </h1>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" integrity="sha256-DHF4zGyjT7GOMPBwpeehwoey18z8uiz98G4PRu2lV0A=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.carousel').slick({
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
        });
    </script>
    <div>
        <div id="cover">
            <form method="GET" action="{{ route('words.search') }}">
                <div class="tb">
                    <div class="td">
                        <input type="search" name="search" placeholder="Search" value="@if (isset($search)) {{ $search }} @endif">
                    </div>
                    <div class="td" id="s-cover">
                        <button type="submit" class="button_search">
                            <div id="s-circle"></div>
                            <span></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div>
        <table class="japanese_syllabary">
            <tr>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
            </tr>
            <tr>
                <td>???</td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
            </tr>
            <tr>
                <td>???</td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
                <td><a href="{{ route('words.hiragana', '???') }}">???</a></td>
            </tr>
        </table>
    </div>
    </div>
</main>
@endsection