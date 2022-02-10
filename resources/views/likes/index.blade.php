@extends('layouts.header')

@section('title', $title)

@section('content')
    @if($like_words->isNotEmpty())
        <main class="main_like">
            <h1 class="page_title">{{ $title }}</h1>
            <table class="search_results">
                <tr>
                    <th class="table_transparent"></th>
                    <th>Word</th>
                    <th>Accent</th>
                    <th></th>
                    <th>Example sentence</th>
                    <th></th>
                    <th>Category</th>
                </tr>
                @forelse($like_words as $word)
                <tr>
                    <td>
                        <a class="like_button">{{ $word->isLikedBy(Auth::user()) ? '♥' : '♡' }}</a>
                            <form method="post" class="like" action="{{ route('words.toggle_like', $word) }}">
                                @csrf
                                @method('patch')
                            </form>
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
            <div>
                {{ $like_words->links() }}
            </div>
        </main>
    @else
        <main class="main_common">
            <div class="flex">
                <h1 class="page_title">Please push the like button!</h1>
            </div>
        </main>
    @endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  /* global $ */
  $('.like_button').on('click', (event) => {
      $(event.currentTarget).next().submit();
  })
</script>
@endsection