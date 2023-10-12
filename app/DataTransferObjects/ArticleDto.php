<?php

namespace App\DataTransferObjects;

use App\Http\Requests\ArticleRequest;

class ArticleDto
{

    public function __construct(
        public readonly string $title,
        public readonly string $body,
        public readonly string $publish_at,
    )
    {

    }


    public static function fromRequest(ArticleRequest $request): ArticleDto
    {
        return new self(
            title:  $request->validated('title'), 
            body:   $request->validated('body'),
            publish_at:   $request->validated('publish_at')
        );
    }
}