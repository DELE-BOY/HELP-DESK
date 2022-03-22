<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnswerRequest;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{
    public function store(StoreAnswerRequest $request)
    {
        $inputs = $request->all();
        $comment = new Answer();
        $comment->fill($inputs);
        $comment->user_id = Auth::id();
        $comment->forum_id = $inputs['forum_id'];
        $comment->save();

        Session::flash('success', 'Respuesta agregada exitosamente');

        return redirect()->back();
    } 

    public function destroy(Answer $answer)
    {
        $answer->delete();
        Session::flash('success', 'Respuesta removida exitosamente');
        return redirect()->back();
    }
 
}
