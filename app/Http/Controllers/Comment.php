<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Interfaces\CommentInterface;

class Comment extends Controller
{
    public function getComments(CommentInterface $inteface){

        $comments = $inteface->getComments();

        return  CommentResource::collection($comments);
    }
}
