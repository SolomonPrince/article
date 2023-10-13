<?php

namespace App\Services\Comment;

use App\DataTransferObjects\CommentDto;
use App\Models\Comment;

class CommentService
{
    /*
     * 
     * 
     */
    public function store(CommentDto $dto)
    {
        return Comment::create([
            'thema' => $dto->thema,
            'text' => $dto->text,
            'article_id' => $dto->article_id,
        ]);
    }

    
}