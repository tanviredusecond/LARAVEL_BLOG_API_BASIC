<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
        // make all the requet

        // return everything
        public function index(){
            return Article::all();
        }
        
        // return just one
        public function show($id){
            return Article::find($id);
        }

        //post function goes here
        public function store(Request $request){
            return Article::create($request->all());
        }

        // update goes here

        public function update(Request $request,$id){
            // get the article
            $article = Article::findOrFail($id);
            //update it
            $article->update($request->all());
            return $article;
        }

        public function delete(Request $request,$id){
            $article = Article::findOrFail($id);
            $article->delete();
            return 204;
        }
}
