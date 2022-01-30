@extends('layouts.logged_in')

@section('title', $title)

@section('content')
<main class="main_add">
    <h1>アクセントを追加</h1>
    <div>
        <form>
        @csrf
        <div>
            <label>
                単語1:
                <div>
                    <input type="text" name="name">
                </div>
            </label>
        </div>
        <div>
            <label>
                アクセント:
                <div>
                    <input type="text" name="name">
                </div>
            </label>
        </div>
        <div>
            <label>
                音声ファイル:
                <input type="file" name="audio">
            </label>
        </div>
            <div>
            <label>
                例文:
                <div>
                    <textarea name="description" rows="10" cols="50"></textarea>
                </div>
            </label>
        </div>
        <div>
                <label>
                音声ファイル:
                <input type="file" name="audio">
            </label>
        </div>
        <div>
                <label>
                カテゴリー1:
                <div>
                <select name="category_id">
                        <option value=""></option>
                </select>
                </div>
            </label>
        </div>
        <div>
            <label>
                カテゴリー２:
                <div>
                <select name="category_id">
                        <option value=""></option>
                </select>
                </div>
            </label>
        </div>
        <input type="submit" value="追加" class="button">
    </form>
    </div>
</main>
@endsection