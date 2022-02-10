<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordAudioRequest extends FormRequest
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
            'word_audio' => [
                'required',
                'file', 
                'mimes:audio/mpeg,mpga,mp3,wav', 
            ],
            'sentence_audio' => [
                'required',
                'file', 
                'mimes:audio/mpeg,mpga,mp3,wav', 
            ],
        ];
    }
}
