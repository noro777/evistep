<?php


namespace App\Service;


use App\Interfaces\CommentInterface;
use App\Models\Comment;

class CommentService implements CommentInterface
{

    public function getComments()
    {
        return Comment::all();
    }
}
