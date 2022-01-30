@extends('layouts.not_logged_in')

@section('title', $title)

@section('content')
<main class="main_search">
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
    <div>
    <table class="search_results">
        <tr>
            <td>開ける</td>
            <td class="accent">
                あ
                <span class="accent_accentless">け</span>
                <span class="accent_accentless">る</span>
            </td>
            <td>
                <audio controls src="Default_20220127-182651.mp3"></audio>
            </td>
            <td>ドアを開ける。</td>
            <td>
                <audio controls src="Default_20220127-182651.mp3"></audio>
            </td>
        </tr>
        <tr>
            <td>開けます</td>
            <td class="accent">
                あ
                <span class="accent_accentless">け</span>
                <span class="accent_high">ま</span>
                す
            </td>
            <td>
                <audio controls src="Default_20220127-182651.mp3"></audio>
            </td>
            <td>ドアを開けます。</td>
            <td>
                <audio controls src="Default_20220127-182651.mp3"></audio>
            </td>
        </tr>
    </table>
    </div>
</main>
@endsection