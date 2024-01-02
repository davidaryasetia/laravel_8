<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "David",
        "email" => "david.aryasetia123@gmail.com",
        "image" => "foto.jpeg"
    ]);
});




Route::get('/blog', function(){

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "David Aryasaetia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nostrum reprehenderit voluptates rerum veniam quaerat vel quod amet odio hic suscipit recusandae quibusdam ab nesciunt, veritatis dolorem placeat ad. Quas quidem pariatur alias odit quod animi veritatis, corporis iure architecto repudiandae illum provident accusantium iusto quam ut, laudantium commodi quia. Exercitationem optio, doloribus earum voluptate debitis eos! Doloribus quisquam, aut repudiandae consequuntur impedit obcaecati odio temporibus, suscipit magni nihil, vero veniam nisi voluptate. Exercitationem itaque voluptatum, deserunt inventore quae voluptatem?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Steven",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium fuga maiores fugit magnam voluptate repellat nostrum beatae neque veritatis, blanditiis, sequi distinctio! Aperiam adipisci, aliquid perferendis suscipit iste iure accusamus earum. Sed amet possimus quas id praesentium accusamus recusandae officia, expedita sit iusto totam dolorem reiciendis at aperiam? Saepe autem porro animi reiciendis dolore! Esse incidunt rerum repudiandae sapiente tenetur nostrum consectetur, eligendi, cum consequuntur ipsum ea! Inventore consequuntur dolorem repellendus architecto consequatur quod autem suscipit magnam fugit qui, ipsam assumenda rem odio maiores corporis odit praesentium distinctio quae, at ea est ullam. Natus tenetur dolorum repudiandae facere recusandae!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single posts
Route::get('/posts/{slug}', function($slug){

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "David Aryasaetia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nostrum reprehenderit voluptates rerum veniam quaerat vel quod amet odio hic suscipit recusandae quibusdam ab nesciunt, veritatis dolorem placeat ad. Quas quidem pariatur alias odit quod animi veritatis, corporis iure architecto repudiandae illum provident accusantium iusto quam ut, laudantium commodi quia. Exercitationem optio, doloribus earum voluptate debitis eos! Doloribus quisquam, aut repudiandae consequuntur impedit obcaecati odio temporibus, suscipit magni nihil, vero veniam nisi voluptate. Exercitationem itaque voluptatum, deserunt inventore quae voluptatem?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Steven",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia laudantium fuga maiores fugit magnam voluptate repellat nostrum beatae neque veritatis, blanditiis, sequi distinctio! Aperiam adipisci, aliquid perferendis suscipit iste iure accusamus earum. Sed amet possimus quas id praesentium accusamus recusandae officia, expedita sit iusto totam dolorem reiciendis at aperiam? Saepe autem porro animi reiciendis dolore! Esse incidunt rerum repudiandae sapiente tenetur nostrum consectetur, eligendi, cum consequuntur ipsum ea! Inventore consequuntur dolorem repellendus architecto consequatur quod autem suscipit magnam fugit qui, ipsam assumenda rem odio maiores corporis odit praesentium distinctio quae, at ea est ullam. Natus tenetur dolorum repudiandae facere recusandae!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
