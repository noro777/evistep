<?php

namespace App\Providers;

use App\Interfaces\CommentInterface;
use App\Interfaces\PostInterface;
use App\Interfaces\UserInteface;
use App\Service\CommentService;
use App\Service\PostService;
use App\Service\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserInteface::class,UserService::class);
        $this->app->bind(PostInterface::class,PostService::class);
        $this->app->bind(CommentInterface::class,CommentService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
