@extends('layouts.not_logged_in')

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
                <td><a href="">わ</a></td>
                <td><a href="">ら</a></td>
                <td><a href="">や</a></td>
                <td><a href="">ま</a></td>
                <td><a href="">は</a></td>
                <td><a href="">な</a></td>
                <td><a href="">た</a></td>
                <td><a href="">さ</a></td>
                <td><a href="">か</a></td>
                <td><a href="">あ</a></td>
            </tr>
            <tr>
                <td><a href="">を</a></td>
                <td><a href="">り</a></td>
                <td><a href="">ゆ</a></td>
                <td><a href="">み</a></td>
                <td><a href="">ひ</a></td>
                <td><a href="">に</a></td>
                <td><a href="">ち</a></td>
                <td><a href="">し</a></td>
                <td><a href="">き</a></td>
                <td><a href="">い</a></td>
            </tr>
            <tr>
                <td><a href="">ん</a></td>
                <td><a href="">る</a></td>
                <td><a href="">よ</a></td>
                <td><a href="">む</a></td>
                <td><a href="">ふ</a></td>
                <td><a href="">ぬ</a></td>
                <td><a href="">つ</a></td>
                <td><a href="">す</a></td>
                <td><a href="">く</a></td>
                <td><a href="">う</a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="">れ</a></td>
                <td></td>
                <td><a href="">め</a></td>
                <td><a href="">へ</a></td>
                <td><a href="">ね</a></td>
                <td><a href="">て</a></td>
                <td><a href="">せ</a></td>
                <td><a href="">け</a></td>
                <td><a href="">え</a></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="">ろ</a></td>
                <td></td>
                <td><a href="">も</a></td>
                <td><a href="">ほ</a></td>
                <td><a href="">の</a></td>
                <td><a href="">と</a></td>
                <td><a href="">そ</a></td>
                <td><a href="">こ</a></td>
                <td><a href="">お</a></td>
            </tr>
        </table>
    </div>
</main>
@endsection