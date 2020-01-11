<?php

use Illuminate\Http\Request;
// import he model
use App\Article;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// //route for all the artcle
// Route::get('articles',function(){
//     return Article::all();
// });

// // route for specfic atricle
// Route::get('articles/{id}',function(Request $request,$id){
//     // find the article
//     return Article::find($id);
// });

// // route for creating article
// // this will be post request
// // and it will take everyting from the request and 
// // create it

// Route::post('articles',function(Request $request){
//     return Article::create($request->all());
// });

// // now the update request
// // first we fetech the data then we
// // update it

// Route::put('articles/{id}',function(Request $request,$id){
//     $article = Article::findOrFail($id);

//     // update with the new value
//     $article->update($request->all());

//     return $article;
// });


// // delete the Article
// Route::delete('articles/{id}',function($id){
//     Article::find($id)->delete();
//     return 204;
// });


// add the controller route

Route::get('articles','ArticleController@index');
Route::get('articles/{id}','ArticleController@show');
Route::post('articles','ArticleController@store');
Route::put('articles/{id}','ArticleController@update');
Route::delete('articles/{id}','ArticleController@delete');