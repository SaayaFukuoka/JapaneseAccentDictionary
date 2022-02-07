<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'word' => ['required', 'max:255'],
            'word_hiragana' => ['required', 'max:255'],
            'word_accent' => ['required', 'max:255'],
            'word_audio' => [
                'file', 
                'mimes:audio/mpeg,mpga,mp3,wav', 
            ],
            'sentence' => ['required', 'max:255'],
            'sentence_audio' => [
                'file', 
                'mimes:audio/mpeg,mpga,mp3,wav', 
            ],
        ];
    }
}
