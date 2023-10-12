<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Article\ArticleService;
use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\DataTransferObjects\ArticleDto;

class ArticleController extends Controller
{
    public function __construct(
        protected ArticleService $service
    )
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request): ArticleResource
    {
        $article = $this->service->store(
            ArticleDto::fromRequest($request)
        );

        return ArticleResource::make($article);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): ArticleResource
    {
        return ArticleResource::make($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article): ArticleResource
    {
        $article = $this->service->update(
            $article,
            ArticleDto::fromRequest($request)
        );

        return ArticleResource::make($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
