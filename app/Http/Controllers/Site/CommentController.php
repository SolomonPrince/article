<?php

namespace App\Http\Controllers\Site;

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

    public function store(CommentRequest $request)
    {
        $comment = $this->service->store(
            CommentDto::fromRequest($request)
        );

        return back();
    }
}
