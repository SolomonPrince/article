<?php

namespace App\DataTransferObjects;

use App\Http\Requests\CommentRequest;

class CommentDto
{

    public function __construct(
        public readonly string $thema,
        public readonly string $text,
        public readonly int $article_id,
    )
    {

    }


    public static function fromRequest(CommentRequest $request): CommentDto
    {
        return new self(
            thema:  $request->validated('thema'), 
            text:   $request->validated('text'),
            article_id:   $request->validated('article_id')
        );
    }
}