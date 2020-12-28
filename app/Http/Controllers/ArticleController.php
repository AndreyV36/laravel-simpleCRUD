<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    
    public function createArticle(Request $request){
        $article = new Article();
        $article->name = $request->name;
        $article->content = $request->content;
        $article->save();

        return $article;
    }
    
	public function getArticles(Request $request){
		$articles = Article::all();
		return $articles;
	}
    
	public function deleteArticle(Request $request){
        $article = Article::find($request->id)->delete();
	}
	public function editArticle(Request $request, $id){
        $article = Article::where('id',$id)->first();
        $article->name = $request->get('name');
        $article->content = $request->get('content');
        $article->save();

        return $article;
	}
    
}
