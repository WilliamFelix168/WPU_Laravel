<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        // User::create([
        //     'name'=>'William Felix',
        //     'email'=>'william@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title'=>'Judul 1',
        //     'slug'=>'judul-1',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur reprehenderit impedit in ex tenetur',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur reprehenderit impedit in ex tenetur fuga praesentium modi recusandae cum quasi, temporibus quia harum eum a corporis consequuntur? </p><p>Maiores ratione alias odit totam consectetur placeat aliquam eaque a. Est aperiam nulla fugit aliquam illum, cupiditate vitae optio vero ut officia recusandae inventore eligendi quam accusantium ipsam iure! Quae quam esse vitae enim incidunt voluptas mollitia, repellendus laudantium dolores et expedita ad excepturi animi!</p><p>Et accusantium optio ipsa nulla aliquid rerum odio? Possimus sint explicabo autem qui. Enim, sed. Dolor autem consequatur expedita. Veritatis eveniet architecto repudiandae, laudantium aliquid nobis nihil?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1,
        // ]);
        // Post::create([
        //     'title'=>'Judul 2',
        //     'slug'=>'judul-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur reprehenderit impedit in ex tenetur fuga praesentium modi recusandae cum quasi, temporibus quia harum eum a corporis consequuntur? </p><p>Maiores ratione alias odit totam consectetur placeat aliquam eaque a. Est aperiam nulla fugit aliquam illum, cupiditate vitae optio vero ut officia recusandae inventore eligendi quam accusantium ipsam iure! Quae quam esse vitae enim incidunt voluptas mollitia, repellendus laudantium dolores et expedita ad excepturi animi!</p><p>Et accusantium optio ipsa nulla aliquid rerum odio? Possimus sint explicabo autem qui. Enim, sed. Dolor autem consequatur expedita. Veritatis eveniet architecto repudiandae, laudantium aliquid nobis nihil?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1,
        // ]);
        // Post::create([
        //     'title'=>'Judul 3',
        //     'slug'=>'judul-3',
        //     'excerpt' => 'Lorem ipsum',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur reprehenderit impedit in ex tenetur fuga praesentium modi recusandae cum quasi, temporibus quia harum eum a corporis consequuntur? </p><p>Maiores ratione alias odit totam consectetur placeat aliquam eaque a. Est aperiam nulla fugit aliquam illum, cupiditate vitae optio vero ut officia recusandae inventore eligendi quam accusantium ipsam iure! Quae quam esse vitae enim incidunt voluptas mollitia, repellendus laudantium dolores et expedita ad excepturi animi!</p><p>Et accusantium optio ipsa nulla aliquid rerum odio? Possimus sint explicabo autem qui. Enim, sed. Dolor autem consequatur expedita. Veritatis eveniet architecto repudiandae, laudantium aliquid nobis nihil?</p>',
        //     'category_id'=>2,
        //     'user_id'=>1,
        // ]);

        
    }
}
