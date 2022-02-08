@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_edit">
    <h1 class="page_title">{{ $title }}</h1>
    <div class="flex">
        <form 
            method="POST" 
            action="{{ route('words.store') }}"
            enctype="multipart/form-data"
        >
            @csrf
            <div>
                <label>
                    word
                    <div class="input_space">
                        <input type="text" name="word" class="input_size">
                    </div>
                </label>
            </div>
            <div>
                <label>
                    hiragana
                    <div class="input_space">
                        <input type="text" name="word_hiragana" class="input_size">
                    </div>
                </label>
            </div>
            <div class="flex">
                <label>
                    accent
                    <div class="input_space">
                        <input type="text" name="word_accent" class="input_size">
                    </div>
                </label>
                <label class="input_space_left">
                    audio
                    <div class="input_space">
                        <input type="file" name="word_audio">
                    </div>
                </label>
            </div>
            <div class="flex">
                <label>
                    example sentence
                    <div class="input_space">
                        <textarea name="sentence" rows="2" cols="43"></textarea>
                    </div>
                </label>
                <label class="input_space_left">
                    audio
                    <div class="input_space">
                        <input type="file" name="sentence_audio">
                    </div>
                </label>
            </div>
            <div>
                <label>
                    category
                    <div class="input_space">
                        <select name="category_id" class="input_size">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </label>
            </div>
            <div class="button_common_section">
                <a class="button_common">
                    <span>
                        <input type="submit" value="add" class="button_reset">
                    </span>
                </a>
            </div>
        </form>
    </div>
</main>
@endsection