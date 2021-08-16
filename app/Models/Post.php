<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    //use HasFactory;
    private static $blogpost = [
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
    
    public static function all()
    {
        return collect(self::$blogpost);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug',$slug);
    }
}
