<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Http\Requests\WordRequest;
use App\User;
use App\Like;
use App\Services\FileUploadService;
use App\Category;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('words.index', [
            'title' => 'home',
          ]);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('words.create', [
            'title' => 'words_create',
             'categories' => $categories,
          ]);
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WordRequest $request)
    {
        
        $path_word = '';
        $word_audio = $request->file('word_audio');
        if( isset($word_audio) === true ){
            $path_word = $word_audio->store('word_audios', 'public');
        }

        $path_sentence = '';
        $sentence_audio = $request->file('sentence_audio');
        if( isset($sentence_audio) === true ){
            $path_sentence = $sentence_audio->store('sentence_audios', 'public');
        }
        
        $data = explode(",", $request->word_accent);
        $json_data = json_encode($data, JSON_UNESCAPED_UNICODE);

        Word::create([
            'user_id' => \Auth::user()->id,
            'word' => $request->word,
            'word_hiragana' => $request->word_hiragana,
            'word_accent' => $json_data,
            'word_audio' => $path_word,
            'sentence' => $request->sentence,
            'sentence_audio' => $path_sentence,
            'category_id' => $request->category_id,
          ]);
          session()->flash('success', '単語を追加しました');
          return redirect('/search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        return view('words.show', [
            'title' => 'show',
            'word' =>$word,
            'hiraganas' => mb_str_split($word->word_hiragana),
            'accents' => json_decode($word->word_accent, true),
          ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('words.edit', [
            'title' => 'words_edit',
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!empty($search)) {
            $words = Word::where('word_hiragana', 'LIKE', '%' . $search . '%')
            ->orWhere('word', 'LIKE', '%' . $search . '%')
            ->get();
        }else{
            $words = Word::all();
        }
        return view('words.search', [
            'title' => 'search',
            'words' => $words,
            'search' => $search,
          ]);
    }

    public function toggleLike($id){
        $user = \Auth::user();
        $word = Word::find($id);

        if($word->isLikedBy($user)){
            $word->likes->where('user_id', $user->id)->first()->delete();
        } else {
            Like::create([
                'user_id' => $user->id,
                'word_id' => $word->id,
            ]);
        }
        return redirect('/search');
    }

    public function category(Category $category)
    {
        $words = Word::where('category_id', $category->id)->get();
        return view('words.search', [
            'title' => 'search',
            'words' => $words,
            'search' => '',
          ]);
    }
}
