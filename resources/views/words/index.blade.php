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
                <div class="td"><input type="search" name="search" placeholder="Search" value="@if (isset($search)) {{ $search }} @endif"></div>
                <div class="td" id="s-cover">
                <button type="submit" class="button_search">
                    <div id="s-circle"></div>
                    <span></span>
                </button>
                </div>
            </div>
            </form>
        </div>
        <table class="japanese_syllabary">
            <tr>
                <td><a href="{{ route('words.hiragana', 'わ') }}">わ</a></td>
                <td><a href="{{ route('words.hiragana', 'ら') }}">ら</a></td>
                <td><a href="{{ route('words.hiragana', 'や') }}">や</a></td>
                <td><a href="{{ route('words.hiragana', 'ま') }}">ま</a></td>
                <td><a href="{{ route('words.hiragana', 'は') }}">は</a></td>
                <td><a href="{{ route('words.hiragana', 'な') }}">な</a></td>
                <td><a href="{{ route('words.hiragana', 'た') }}">た</a></td>
                <td><a href="{{ route('words.hiragana', 'さ') }}">さ</a></td>
                <td><a href="{{ route('words.hiragana', 'か') }}">か</a></td>
                <td><a href="{{ route('words.hiragana', 'あ') }}">あ</a></td>
            </tr>
            <tr>
                <td><a href="{{ route('words.hiragana', 'を') }}">を</a></td>
                <td><a href="{{ route('words.hiragana', 'り') }}">り</a></td>
                <td><a href="{{ route('words.hiragana', 'ゆ') }}">ゆ</a></td>
                <td><a href="{{ route('words.hiragana', 'み') }}">み</a></td>
                <td><a href="{{ route('words.hiragana', 'ひ') }}">ひ</a></td>
                <td><a href="{{ route('words.hiragana', 'に') }}">に</a></td>
                <td><a href="{{ route('words.hiragana', 'ち') }}">ち</a></td>
                <td><a href="{{ route('words.hiragana', 'し') }}">し</a></td>
                <td><a href="{{ route('words.hiragana', 'き') }}">き</a></td>
                <td><a href="{{ route('words.hiragana', 'い') }}">い</a></td>
            </tr>
            <tr>
                <td><a href="{{ route('words.hiragana', 'ん') }}">ん</a></td>
                <td><a href="{{ route('words.hiragana', 'る') }}">る</a></td>
                <td><a href="{{ route('words.hiragana', 'よ') }}">よ</a></td>
                <td><a href="{{ route('words.hiragana', 'む') }}">む</a></td>
                <td><a href="{{ route('words.hiragana', 'ふ') }}">ふ</a></td>
                <td><a href="{{ route('words.hiragana', 'ぬ') }}">ぬ</a></td>
                <td><a href="{{ route('words.hiragana', 'つ') }}">つ</a></td>
                <td><a href="{{ route('words.hiragana', 'す') }}">す</a></td>
                <td><a href="{{ route('words.hiragana', 'く') }}">く</a></td>
                <td><a href="{{ route('words.hiragana', 'う') }}">う</a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="{{ route('words.hiragana', 'れ') }}">れ</a></td>
                <td></td>
                <td><a href="{{ route('words.hiragana', 'め') }}">め</a></td>
                <td><a href="{{ route('words.hiragana', 'へ') }}">へ</a></td>
                <td><a href="{{ route('words.hiragana', 'ね') }}">ね</a></td>
                <td><a href="{{ route('words.hiragana', 'て') }}">て</a></td>
                <td><a href="{{ route('words.hiragana', 'せ') }}">せ</a></td>
                <td><a href="{{ route('words.hiragana', 'け') }}">け</a></td>
                <td><a href="{{ route('words.hiragana', 'え') }}">え</a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="{{ route('words.hiragana', 'ろ') }}">ろ</a></td>
                <td></td>
                <td><a href="{{ route('words.hiragana', 'も') }}">も</a></td>
                <td><a href="{{ route('words.hiragana', 'ほ') }}">ほ</a></td>
                <td><a href="{{ route('words.hiragana', 'の') }}">の</a></td>
                <td><a href="{{ route('words.hiragana', 'と') }}">と</a></td>
                <td><a href="{{ route('words.hiragana', 'そ') }}">そ</a></td>
                <td><a href="{{ route('words.hiragana', 'こ') }}">こ</a></td>
                <td><a href="{{ route('words.hiragana', 'お') }}">お</a></td>
            </tr>
        </table>
    </div>
</main>
@endsection