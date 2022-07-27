<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Phone;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $phone = User::find(1); // find user 1
    // $phone = User::find(1)->phone; // find user 1 with phone info
    // $phone = User::find(2)->phone; // find user 2 with phone info
    // return $phone;

    // user from phone

    // $user = Phone::find(1); // find user 1 with phone info
    // $user = Phone::find(2)->user; // find user 2 with phone info
    // return $user;

    //get all users

    $users = User::all();

    // return $users;


    //one two many relationship

    //post data
    // $post = Post::find(2);// return post 2 datat.
    // $post = Post::find(1)->comments;// return all comments of the post 1.
    // return $post;

    //comments data
    // $comments = Comment::all(); // return all the comments
    // $comments = Comment::find(1)->post; // return the post of the comment 1.
    // return $comments;


    $comments = Comment::all(); // return all the comments

    $posts = Post::with('comments')->get();  //return all the posts with the comments assisoated with the posts.    return $posts;


    //many-to -many relationship

    $postsMany = Post::with('categories')->get();

    $categoryMany = Category::with('posts')->get();
    // return $categoryMany;
    // return $postsMany;
    // return users and posts to the welcome view page
    return view('welcome', compact('users', 'posts', 'postsMany', 'categoryMany'));
});
