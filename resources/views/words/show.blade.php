@extends('layouts.header')

@section('title', $title)

@section('content')
<main class="main_search">
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
        <tr>
            <td></td>
            <td>{{ $word->word }}</td>
            <td>
                @php    
                    foreach(mb_str_split($word->word_hiragana) as $key=>$hiragana){
                        $accents = json_decode($word->word_accent, true);
                            if($accents[$key] === "1"){
                                print '<span class="accent_accentless">' . e($hiragana) . '</span>';
                            }
                            elseif($accents[$key] === "2"){
                                print '<span class="accent_high">' . e($hiragana) . '</span>';
                            }else{
                                print e($hiragana);
                            }
                    }
                @endphp  
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