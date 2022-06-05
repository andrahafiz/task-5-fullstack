<?php

namespace App\Http\Controllers\API;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\Validator;

class ArticleController extends BaseController
{
    //
    public function index()
    {
        $article = Article::with('categories')->paginate(5);
        return response()->json($article);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'text'],
            'user_id' => ['required'],
            'category_id' => ['required'],
        ]);
        $request['image'] = 'image.jpg';

        $article = Article::create($request->all());
        // dd($request->all());
        if (!$article) {
            return $this->responseError('Article failed to add', 400);
        }
        return $this->responseOk(null, 200, 'The Article has been successfully added.');
    }
    public function update(Request $request, Article $article)
    {
        // dd($article);
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'text'],
            'user_id' => ['required'],
            'category_id' => ['required'],
        ]);
        $request['image'] = 'image.jpg';
        $article = $article->update($request->all());
        if (!$article) {
            return $this->responseError('Article failed to edit', 400);
        }
        return $this->responseOk($article, 200, 'The Article successfully modified.');
    }
    public function show(Article $article)
    {
        //
        $articles = $article;
        if (!$articles) {
            return $this->responseError('Article not found', 400);
        }
        return response()->json($articles);
    }

    public function destroy(Article $article)
    {
        //
        $delete = $article->delete();
        if (!$delete) {
            return $this->responseError('Article failed to delete', 400);
        }
        return $this->responseOk(null, 200, 'The Article has been successfully delete.');
    }
}
