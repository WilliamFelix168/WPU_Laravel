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
    return view('home',["title" => "Home"]);
});
Route::get('/posts', function () {
    $blogpost =[
        [
            "Title" => "Judul Post Pertama",
            "Author" => "William",
            "slug"=>"judul-post-pertama",
            "Body" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quas ad recusandae porro, vel beatae voluptatum dolores et numquam quaerat minus explicabo inventore quisquam tempore voluptate deleniti enim? Quod voluptatem accusamus minus sit, unde repellendus adipisci blanditiis corrupti, sequi officiis reiciendis vitae soluta, excepturi natus? Unde, harum cumque voluptates enim voluptatum, explicabo dolorum autem eveniet voluptas accusamus aspernatur, officia eius! Modi maxime earum veritatis vero nobis? Culpa, sint qui ad possimus eius architecto quos soluta vitae consectetur. Culpa, ratione modi!"
        ],
        [
            "Title" => "Judul Post Kedua",
            "Author" => "Felix",
            "slug"=>"judul-post-kedua",
            "Body" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quas ad recusandae porro, vel beatae voluptatum dolores et numquam quaerat minus explicabo inventore quisquam tempore voluptate deleniti enim? Quod voluptatem accusamus minus sit, unde repellendus adipisci blanditiis corrupti, sequi officiis reiciendis vitae soluta, excepturi natus? Unde, harum cumque voluptates enim voluptatum, explicabo dolorum autem eveniet voluptas accusamus aspernatur, officia eius! Modi maxime earum veritatis vero nobis? Culpa, sint qui ad possimus eius architecto quos soluta vitae consectetur. Culpa, ratione modi!"
        ]
    ];

    return view('posts',[
        "title" => "Posts",
        "posts"=>$blogpost,
    ]);

});
Route::get('/about', function () {
    return view('about',["title" => "About"]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blogpost =[
        [
            "Title" => "Judul Post Pertama",
            "Author" => "William",
            "slug"=>"judul-post-pertama",
            "Body" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quas ad recusandae porro, vel beatae voluptatum dolores et numquam quaerat minus explicabo inventore quisquam tempore voluptate deleniti enim? Quod voluptatem accusamus minus sit, unde repellendus adipisci blanditiis corrupti, sequi officiis reiciendis vitae soluta, excepturi natus? Unde, harum cumque voluptates enim voluptatum, explicabo dolorum autem eveniet voluptas accusamus aspernatur, officia eius! Modi maxime earum veritatis vero nobis? Culpa, sint qui ad possimus eius architecto quos soluta vitae consectetur. Culpa, ratione modi!"
        ],
        [
            "Title" => "Judul Post Kedua",
            "Author" => "Felix",
            "slug"=>"judul-post-kedua",
            "Body" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quas ad recusandae porro, vel beatae voluptatum dolores et numquam quaerat minus explicabo inventore quisquam tempore voluptate deleniti enim? Quod voluptatem accusamus minus sit, unde repellendus adipisci blanditiis corrupti, sequi officiis reiciendis vitae soluta, excepturi natus? Unde, harum cumque voluptates enim voluptatum, explicabo dolorum autem eveniet voluptas accusamus aspernatur, officia eius! Modi maxime earum veritatis vero nobis? Culpa, sint qui ad possimus eius architecto quos soluta vitae consectetur. Culpa, ratione modi!"
        ]
    ];

    $new_post=[];
    foreach($blogpost as $post){
        if($post["slug"] === $slug){
            $new_post= $post;
        }
    }
    return view('post',[
        "title" => "Single Post",
        "post"=>$new_post
    ]);
});

