@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_create">
    <h1>{{ $title }}</h1>
    <div>
        <form 
        method="POST" 
        action="{{ route('words.update', $word) }}"
        >
        @csrf
        @method('patch')
        <div>
            <label>
                単語:
                <div>
                    <input type="text" name="word" value="{{ $word->word }}">
                </div>
            </label>
        </div>
        <div>
            <label>
                ひらがな:
                <div>
                    <input type="text" name="word_hiragana" value="{{ $word->word_hiragana }}">
                </div>
            </label>
        </div>
        <div>
            <label>
                アクセント:
                <div>
                    <input type="text" name="word_accent" value="{{ $word->word_accent }}">
                </div>
            </label>
        </div>
        <div>
            <label>
                例文:
                <div>
                    <textarea name="sentence" rows="10" cols="50">{{ $word->sentence }}</textarea>
                </div>
            </label>
        </div>
        <div>
            <label>
                カテゴリ:
                <div>
                <select name="category_id">
                  @foreach($categories as $category)
                      <option value="{{ $category->id }}" {{ $category->id === $word->category_id ? 'selected':'' }}>{{ $category->name }}</option>
                  @endforeach
                </select>
                </div>
            </label>
        </div>
        <input type="submit" value="変更" class="button">
        </form>
    </div>
</main>
@endsection
