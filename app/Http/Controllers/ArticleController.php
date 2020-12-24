<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }


    public function create()
    {
 
        return view('articles.create');
    }

    public function store(Request $request)
    {
       $request->validate([
            'title'=> 'required|min:5',
            'content' => 'required'
        ]);

        Article::create([
            'title' => $request['title'],
            'content' => $request['content']
        ]);

        return redirect('/');

    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }


    public function update(Request $request, Article $article,$id)
    {
        $request->validate([
            'title'=> 'required|min:5',
            'content' => 'required'
        ]);

        $article = Article::findOrFail($id);

        $article->update([
            'title' => $request['title'],
            'content' => $request['content']
        ]);

        return redirect('/');
    }


    public function destroy($id)
    {
            $article = Article::findOrFail($id);

            $article->delete();

            return redirect('/');
    }
}
