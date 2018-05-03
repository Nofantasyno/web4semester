<?php

namespace App\Http\Controllers;
use App\Http\Requests\createNotebookRequest;
use App\Http\Requests\createSearchRequest;
use \App\Notebook;
use \App\Feedback;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Notebooks_controller extends Controller
{
    public function index(){
        if(request()->has('sort')){
            $notebooks = Notebook::orderBy('price', request('sort'))->paginate(3)->appends('sort',request('sort'));
        }
        else{
            $notebooks = DB::table('notebooks')->paginate(3);
        }
        return view('eshop.index', ['notebooks'=>$notebooks]);
    }

    public function show($id){
        $notebook = Notebook::find($id);
        $feedbacks = Feedback::where('item_id', $id)->get();
        $users = User::all();
        return view('eshop.notebook_view', ['notebook'=>$notebook, 'feedbacks'=>$feedbacks, 'users'=>$users]);
    }
    public function destroy($id){
        Notebook::find($id)->delete();
        return redirect()->route('index');
    }

    /// ДОБАВИТЬ УДАЛЕНИЕ КОММЕНТОВ ПРИ УДАЛЕНИИ ТОВАРА

    public function categorize($cat_id){
        $notebooks = Notebook::where('categories_id', $cat_id)->paginate(3);
        return view('eshop.index', ['notebooks'=>$notebooks]);
    }

    public function create(){
        return view('eshop.create');
    }

    public function store(createNotebookRequest $request){
        Notebook::create($request->all());
        return redirect()->route('index');
    }

    public function edit($id){
        return view('eshop.edit');
    }

    public function search(createSearchRequest $request){
        $keyword = $request->input('keyword');
        $notebooks = Notebook::where('brand', 'LIKE', '%'.$keyword.'%')->orWhere('model', 'LIKE', '%'.$keyword.'%')->get();
            return view('eshop.search', ['notebooks'=>$notebooks]);

    }

}
