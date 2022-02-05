<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Mail\ContactSendmail;

class ContactController extends Controller
{
    public function index()
    {
        return $this->myview('contact.index');
    }


    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required',
        ]);

        $inputs = $request->all();

        return $this->myview('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }


    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required'
        ]);

        $action = $request->input('action');
        
        $inputs = $request->except('action');

        if($action !== 'submit'){
            return redirect()
                ->route('contact.index')
                ->withInput($inputs);

        } else {
            \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

            $request->session()->regenerateToken();

            return $this->myview('contact.thanks');
            
        }
    }
}
