<?php
// filepath: /Users/karinayakovenko/VSCode/Server side/CA2/laravel-8-complete-blog/app/Providers/ViewServiceProvider.php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Post;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using a closure based composer...
        View::composer('layouts.footer', function ($view) {
            $latestPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
            $view->with('latestPosts', $latestPosts);
        });
    }
}