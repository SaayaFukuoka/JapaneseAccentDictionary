@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_edit">
    <h1 class="page_title">{{ $title }}</h1>
    <div class="flex">
        <form 
            method="POST" 
            action="{{ route('words.update_audio', $word) }}"
            enctype="multipart/form-data"
        >
            @csrf
            @method('patch')
            <div>
                <label>
                    word 
                    <div>
                        @if($word->word_audio !== '')
                            <audio controls src="{{ \Storage::url($word->word_audio) }}"></audio>
                        @else
                            <p>There is no file.</p>
                        @endif
                    </div>
                </label>
            </div>
            <div class="input_space">
                <input type="file" name="word_audio">
            </div> 
            <div>
                <label>
                    example sentence
                    <div>
                        @if($word->sentence_audio !== '')
                            <audio controls src="{{ \Storage::url($word->sentence_audio) }}"></audio>
                        @else
                            <p>There is no file.</p>
                        @endif
                    </div>
                </label>
            </div>
            <div class="input_space">
                <input type="file" name="sentence_audio">
            </div>
            <div class="button_common_section">
                <a class="button_common">
                    <span>
                        <input type="submit" value="change" class="button_reset">
                    </span>
                </a>
            </div>
        </form>
    </div>
</main>
@endsection
