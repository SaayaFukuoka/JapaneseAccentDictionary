@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_edit">
    <h1 class="page_title">{{ $title }}</h1>
    <div class="flex">
        <form 
            method="POST" 
            action="{{ route('words.update', $word) }}"
        >
            @csrf
            @method('patch')
            <div>
                <label>
                    word
                    <div class="input_space">
                        <input type="text" name="word" value="{{ $word->word }}" class="input_size">
                    </div>
                </label>
            </div>
            <div>
                <label>
                    hiragana
                    <div class="input_space">
                        <input type="text" name="word_hiragana" value="{{ $word->word_hiragana }}" class="input_size">
                    </div>
                </label>
            </div>
            <div>
                <label>
                    accent
                    <div class="input_space">
                        <input type="text" name="word_accent" value="{{ $word->word_accent }}" class="input_size">
                    </div>
                </label>
            </div>
            <div>
                <label>
                    example sentence
                    <div class="input_space">
                        <textarea name="sentence" rows="2" cols="43">{{ $word->sentence }}</textarea>
                    </div>
                </label>
            </div>
            <div>
                <label>
                    category
                    <div class="input_space">
                        <select name="category_id" class="input_size">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id === $word->category_id ? 'selected':'' }}>{{ $category->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </label>
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
