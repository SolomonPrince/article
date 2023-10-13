<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Comment\CommentService;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\DataTransferObjects\CommentDto;

class CommentController extends Controller
{
    public function __construct(
        protected CommentService $service
    )
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request): CommentResource
    {
        $comment = $this->service->store(
            CommentDto::fromRequest($request)
        );

        return CommentResource::make($comment);
    }
}
