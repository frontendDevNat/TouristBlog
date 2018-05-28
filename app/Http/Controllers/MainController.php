<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function showArticle($id = null){
        return view('article', ['id' => $id]);
    }

    public function shoeArticleAddForm(){
        return view('add_article');
    }

    public function addArticle(Request $request){

        $titleArticle = $request -> input('titleArticle');
        $contentArticle = $request -> input('contentArticle');


        if ($titleArticle === '111' && $contentArticle === '222') {
                     return redirect()
                         ->route('mainPage');
     }
       return view('add_article', ['errorMessage' => 'The fields should be filled in']);
    }
}
