<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('home', compact('articles'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required','string','max:255'],
            'sub_title' => ['nullable', 'string', 'max:255'],
            'body' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string', 'max:255']
        ]);

        Article::create($validated);

        return redirect()->route('home');
        
    }

    public function show(Article $article)
    {
        return view('article', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => ['required','string','max:255'],
            'sub_title' => ['nullable', 'string', 'max:255'],
            'body' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string', 'max:255']
        ]);

        $article->update($validated);

        return redirect()->route('home');
    }

    public function delete(Article $article)
    {
        $article->delete();

        return redirect()->route('home');
    }
}
