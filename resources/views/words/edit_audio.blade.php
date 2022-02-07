@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_create">
    <h1>{{ $title }}</h1>
    <div>
        <form 
            method="POST" 
            action="{{ route('words.update_audio', $word) }}"
            enctype="multipart/form-data"
        >
            @csrf
            @method('patch')
            <div>
                <label>
                    現在の単語音声ファイル:
                    <div>
                        @if($word->word_audio !== '')
                            <audio controls src="{{ \Storage::url($word->word_audio) }}"></audio>
                        @else
                            <p>単語音声ファイルはありません</p>
                        @endif
                    </div>
                </label>
            </div>
            <div>         
                <label>
                    変更：
                    <div>
                        <input type="file" name="word_audio">
                    </div> 
                </label>
            </div>
            <div>
                <label>
                    現在の例文音声ファイル:
                    <div>
                        @if($word->sentence_audio !== '')
                            <audio controls src="{{ \Storage::url($word->sentence_audio) }}"></audio>
                        @else
                            <p>例文音声ファイルはありません</p>
                        @endif
                    </div>
                </label>
            </div>
            <div>         
                <label>
                    変更：
                    <div>
                        <input type="file" name="sentence_audio">
                    </div>
                </label>
            </div>
            <input type="submit" value="更新" class="button">
        </form>
    </div>
</main>
@endsection
