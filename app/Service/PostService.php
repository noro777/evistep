<?php


namespace App\Service;


use App\Interfaces\PostInterface;
use App\Models\Post;

class PostService implements  PostInterface
{

    public function getPosts()
    {
        return Post::all();
    }
}
