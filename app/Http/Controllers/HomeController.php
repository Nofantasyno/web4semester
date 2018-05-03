<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function cabinet(){
      //  $comments = User::where('id', $id)->user_comments()->get();
        return view('eshop.cabinet' /*, ['comments'=>$comments]*/);
    }

}
