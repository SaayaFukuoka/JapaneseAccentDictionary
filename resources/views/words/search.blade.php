@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_search">
    <div id="cover">
        <form method="" action="">
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
    <div>
    <table class="search_results">
        <tr>
            <th></th>
            <th>Word</th>
            <th>Accent</th>
            <th></th>
            <th>Example sentence</th>
            <th></th>
            <th>Category</th>
        </tr>
        @forelse($words as $word)
        <tr>
            <td>
                @if( $user->id == \Auth::user()->id)
                    [<a href="{{ route('words.edit', $word) }}">編集</a>]
                @else
                    <a class="like_button">{{ $word->isLikedBy(Auth::user()) ? '♥' : '♡' }}</a>
                        <form method="post" class="like" action="{{ route('words.toggle_like', $word) }}">
                            @csrf
                            @method('patch')
                        </form>
                @endif
            </td>
            <td>{{ $word->word }}</td>
            <td>
                @foreach(mb_str_split($word->word_hiragana) as $key=>$hiragana)
                @php
                    $accents = json_decode($word->word_accent, true);
                @endphp
                    @if($accents[$key] === "1")
                    <span class="accent_accentless">{{ $hiragana }}</span>
                    @elseif($accents[$key] === "2")
                    <span class="accent_high">{{ $hiragana }}</span>
                    @else
                    {{ $hiragana }}
                    @endif
                @endforeach
            </td>
            <td>
                @if($word->word_audio !== '')
                    <audio controls src="{{ asset('storage/' . $word->word_audio) }}"></audio>
                @else
                @endif
            </td>
            <td>
                {{ $word->sentence }}
            </td>
            <td>
                @if($word->sentence_audio !== '')
                    <audio controls src="{{ asset('storage/' . $word->sentence_audio) }}"></audio>
                @else
                @endif
            </td>
            <td>
                {{ $word->category->name }}
            </td>
        </tr>
        @empty
        @endforelse
    </table>
    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  /* global $ */
  $('.like_button').on('click', (event) => {
      $(event.currentTarget).next().submit();
  })
</script>
@endsection