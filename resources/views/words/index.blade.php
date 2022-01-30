@extends('layouts.not_logged_in')

@section('title', $title)

@section('content')
<main class="main_home">
    <div class="carousel">
        <div>
            <img src="LRG_DSC073144.jpeg" alt="画像1">
            <div class="carousel_content">
                <h1 class="title_home">
                    Japanese<br>
                    Accent<br>
                    Dictionary
                </h1>
            </div>
        </div>
        <div>
            <img src="LRG_DSC07324.jpeg" alt="画像2">
            <div class="carousel_content">
                <h1 class="title_home">
                    Japanese<br>
                    Accent<br>
                    Dictionary
                </h1>
            </div>
        </div>
        <div>
            <img src="DSC07040_14.jpg" alt="画像3">
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
        // カルーセルにするセレクタを指定する
        $('.carousel').slick({
            // ここに slick のオプションを指定
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
        });
    </script>
    <div>
        <div id="cover">
            <form method="get" action="">
            <div class="tb">
                <div class="td"><input type="search" placeholder="Search" required></div>
                <div class="td" id="s-cover">
                <button type="submit">
                    <div id="s-circle"></div>
                    <span></span>
                </button>
                </div>
            </div>
            </form>
        </div>
        <table class="japanese_syllabary">
            <tr>
                <td>わ</td>
                <td>ら</td>
                <td>や</td>
                <td>ま</td>
                <td>は</td>
                <td>な</td>
                <td>た</td>
                <td>さ</td>
                <td>か</td>
                <td>あ</td>
            </tr>
            <tr>
                <td>を</td>
                <td>り</td>
                <td>ゆ</td>
                <td>み</td>
                <td>ひ</td>
                <td>に</td>
                <td>ち</td>
                <td>し</td>
                <td>き</td>
                <td>い</td>
            </tr>
            <tr>
                <td>ん</td>
                <td>る</td>
                <td>よ</td>
                <td>む</td>
                <td>ふ</td>
                <td>ぬ</td>
                <td>つ</td>
                <td>す</td>
                <td>く</td>
                <td>う</td>
            </tr>
                <td></td>
                <td>れ</td>
                <td></td>
                <td>め</td>
                <td>へ</td>
                <td>ね</td>
                <td>て</td>
                <td>せ</td>
                <td>け</td>
                <td>え</td>
            </tr>
            </tr>
                <td></td>
                <td>ろ</td>
                <td></td>
                <td>も</td>
                <td>ほ</td>
                <td>の</td>
                <td>と</td>
                <td>そ</td>
                <td>こ</td>
                <td>お</td>
            </tr>
        </table>
    </div>
</main>
@endsection