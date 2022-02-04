@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_create">
    <h1>{{ $title }}</h1>
    <div>
        <form method="POST" 
        action="{{ route('words.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div>
            <label>
                単語:
                <div>
                    <input type="text" name="word">
                </div>
            </label>
        </div>
        <div>
            <label>
                ひらがな:
                <div>
                    <input type="text" name="word_hiragana">
                </div>
            </label>
        </div>
        <div>
            <label>
                アクセント:
                <div>
                    <input type="text" name="word_accent">
                </div>
            </label>
        </div>
        <div>
            <label>
                音声ファイル:
                <input type="file" name="word_audio">
            </label>
        </div>
            <div>
            <label>
                例文:
                <div>
                    <textarea name="sentence" rows="10" cols="50"></textarea>
                </div>
            </label>
        </div>
        <div>
            <label>
                音声ファイル:
                <input type="file" name="sentence_audio">
            </label>
        </div>
        <div>
            <label>
                カテゴリ:
                <div>
                <select name="category_id">
                  @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
                </div>
            </label>
        </div>
        <input type="submit" value="追加" class="button">
        </form>
    </div>
</main>
@endsection