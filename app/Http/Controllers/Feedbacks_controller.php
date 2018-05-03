<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Requests\createFeedbackRequest;
use Illuminate\Support\Facades\Redirect;

class Feedbacks_controller extends Controller
{
    public function store(createFeedbackRequest $request){
        $feedback = Feedback::create($request->all());
        $view = view('comments.commentForm')->with('feedback', $feedback)->render();
        return $view;
    }

    public function destroy($id){
        $item_id = Feedback::find($id)->item_id;
        Feedback::find($id)->delete();
        return Redirect::to("/eshop/show/{$item_id}");
    }
}
