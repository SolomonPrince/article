<?php

namespace App\Services\Article;

use App\DataTransferObjects\ArticleDto;
use App\Models\Article;
use Carbon\Carbon;

class ArticleService
{
    /*
     * 
     * 
     */
    public function store(ArticleDto $dto)
    {
        return Article::create([
            'title' => $dto->title,
            'body' => $dto->body,
            'publish_at' => Carbon::createFromFormat('Y-m-d H:i', $dto->publish_at),
        ]);
    }

    /*
     * 
     * 
     * 
     */
    public function update(Article $article, ArticleDto $dto)
    {
        return tap($article)->update([
            'title' => $dto->title,
            'body' => $dto->body,
            'publish_at' => Carbon::createFromFormat('Y-m-d H:i', $dto->publish_at),
        ]);
    }
}