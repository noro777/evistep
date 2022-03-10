<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Interfaces\PostInterface;

class Post extends Controller
{
    public function getPosts(PostInterface $inteface){

        $posts = $inteface->getPosts();

        return  PostResource::collection($posts);
    }
}
