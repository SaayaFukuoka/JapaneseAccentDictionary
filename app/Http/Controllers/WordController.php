<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Http\Requests\WordRequest;
use App\User;
use App\Like;
use App\Services\FileUploadService;
use App\Category;
use App\Http\Requests\WordAudioRequest;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->myview('words.index', [
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
        return $this->myview('words.create', [
            'title' => '単語追加',
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
          return redirect()->route('words.search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        $user = \Auth::user();
        return $this->myview('words.show', [
            'title' => '単語表示',
            'word' =>$word,
            'hiraganas' => mb_str_split($word->word_hiragana),
            'accents' => json_decode($word->word_accent, true),
            'user' => $user,
          ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        return $this->myview('words.edit', [
            'title' => '単語編集',
            'word' => $word,
          ]);
    }

    public function editAudio(Word $word)
    {
        return $this->myview('words.edit_audio', [
            'title' => '音声編集',
            'word' => $word,
          ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, WordRequest $request)
    {
        $word = Word::find($id);
        $word->update($request->only(['word','word_hiragana', 'word_accent', 'sentence', 'category_id']));
        session()->flash('success', '単語を編集しました');
        return redirect()->route('words.search', $word);
    }

    public function updateAudio($id, WordAudioRequest $request){
 
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
 
        $word = Word::find($id);
 
        if($word->word_audio !== ''){
          \Storage::disk('public')->delete(\Storage::url($word->word_audio));
        }
        $word->update([
          'word_audio' => $path_word, 
        ]);

        if($word->sentence_audio !== ''){
            \Storage::disk('public')->delete(\Storage::url($word->sentence_audio));
          }
        $word->update([
        'sentence_audio' => $path_sentence, 
        ]);
 
        session()->flash('success', '音声を変更しました');
        return redirect()->route('words.search');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        if($word->word_audio !== ''){
          \Storage::disk('public')->delete($word->word_audio);
        }
        if($word->sentence_audio !== ''){
            \Storage::disk('public')->delete($word->sentence_audio);
          }
 
        $word->delete();
        session()->flash('success', '単語を削除しました');
        return redirect()->route('words.search');
    }

    public function search(Request $request)
    {
        $user = \Auth::user();
        $search = $request->input('search');
        if (!empty($search)) {
            $words = Word::where('word_hiragana', 'LIKE', '%' . $search . '%')
            ->orWhere('word', 'LIKE', '%' . $search . '%')
            ->get();
        }else{
            $words = Word::all();
        }
        return $this->myview('words.search', [
            'title' => 'search',
            'words' => $words,
            'search' => $search,
            'user' => $user,
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
        return redirect()->route('words.search');
    }

    public function category(Category $category)
    {
        $user = \Auth::user();
        $words = Word::where('category_id', $category->id)->get();
        return $this->myview('words.search', [
            'title' => 'search',
            'words' => $words,
            'search' => '',
            'user' => $user,
          ]);
    }

    public function hiragana(Request $request, $char)
    {
        $user = \Auth::user();
        $words = Word::where('word_hiragana', 'LIKE', $char. '%')->get();
        return $this->myview('words.search', [
            'title' => 'search',
            'words' => $words,
            'search' => '',
            'user' => $user,
          ]);
    }
}
