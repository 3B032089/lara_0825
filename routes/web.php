<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //$post = new Post();
    //$post->title = 'test title';
    //$post->content = 'test content';
    //$post->save();

   // Post::create([
   //     'title' => 'created title',
   //     'content' => 'created content',
   // ]);
   /*
    $posts = Post::Where('id', '<', 10)->orderBy('id','DESC')->get();
    foreach($posts as $post){
        echo '編號：'.$post->id.'<br>';
        echo '標題：'.$post->title.'<br>';
        echo '內容：'.$post->content.'<br>';
        echo '張貼時間：'.$post->created_at.'<br>';
        echo '----------------------------'.'<br>';
    }
    dd($posts);
    */
       //$post = Post::find(1);
    /*
    $post->update([
        'title' => 'update title',
        'content' => 'update content',
    ]);
    */

    /*
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();
    return view('welcome');
    */
    //$post->delete();
    //Post::destroy(5,6,7);

    //$allPosts = Post::all();
    //$featuredPosts = Post::where('is_feature',1)->get();
    //$fourthPosts = Post::find(4);
    //$lastPost = Post::orderBY('id','DESC')->first();
   // dd($lastPost);


   $post = Post::find(8);
   echo '標題：'.$post->title.'<br>';
   echo '內容：'.$post->content.'<br>';
   echo '----------------------------'.'<br>';
   $comments = $post->comments()->get();
   foreach($comments as $comment){
    echo '留言'.$comment->content.'<br>';
    echo '----------------------------'.'<br>';
   }
});
