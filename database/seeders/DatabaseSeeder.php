<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'David Aryasetia',
        //     'email' => 'david.aryasetia@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Steven',
        //     'email' => 'steven@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

















        // Post::Create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
        //     ',
        //     'body' => 'alias fugiat quidem consequuntur, repudiandae vel voluptates ex delectus excepturi ullam ipsam, deleniti modi illum nemo fugit? Porro, placeat assumenda ipsa nemo, accusamus dolores consequuntur dignissimos eum laudantium, vel perspiciatis! Iure quasi tempora ipsam ipsa quibusdam porro perspiciatis magnam animi maiores omnis, fugiat at libero? Excepturi dolorum animi quisquam ut perspiciatis rem facilis assumenda perferendis inventore, cum minima quaerat doloribus ad? Labore blanditiis dolor laudantium dolorum, quia eius, dignissimos quam sequi culpa architecto et iusto exercitationem sed voluptates consequatur nulla dolores reiciendis. Voluptate, maiores provident a unde voluptatem enim cumque rerum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::Create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
        //     ',
        //     'body' => 'alias fugiat quidem consequuntur, repudiandae vel voluptates ex delectus excepturi ullam ipsam, deleniti modi illum nemo fugit? Porro, placeat assumenda ipsa nemo, accusamus dolores consequuntur dignissimos eum laudantium, vel perspiciatis! Iure quasi tempora ipsam ipsa quibusdam porro perspiciatis magnam animi maiores omnis, fugiat at libero? Excepturi dolorum animi quisquam ut perspiciatis rem facilis assumenda perferendis inventore, cum minima quaerat doloribus ad? Labore blanditiis dolor laudantium dolorum, quia eius, dignissimos quam sequi culpa architecto et iusto exercitationem sed voluptates consequatur nulla dolores reiciendis. Voluptate, maiores provident a unde voluptatem enim cumque rerum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::Create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
        //     ',
        //     'body' => 'alias fugiat quidem consequuntur, repudiandae vel voluptates ex delectus excepturi ullam ipsam, deleniti modi illum nemo fugit? Porro, placeat assumenda ipsa nemo, accusamus dolores consequuntur dignissimos eum laudantium, vel perspiciatis! Iure quasi tempora ipsam ipsa quibusdam porro perspiciatis magnam animi maiores omnis, fugiat at libero? Excepturi dolorum animi quisquam ut perspiciatis rem facilis assumenda perferendis inventore, cum minima quaerat doloribus ad? Labore blanditiis dolor laudantium dolorum, quia eius, dignissimos quam sequi culpa architecto et iusto exercitationem sed voluptates consequatur nulla dolores reiciendis. Voluptate, maiores provident a unde voluptatem enim cumque rerum!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::Create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
        //     ',
        //     'body' => 'alias fugiat quidem consequuntur, repudiandae vel voluptates ex delectus excepturi ullam ipsam, deleniti modi illum nemo fugit? Porro, placeat assumenda ipsa nemo, accusamus dolores consequuntur dignissimos eum laudantium, vel perspiciatis! Iure quasi tempora ipsam ipsa quibusdam porro perspiciatis magnam animi maiores omnis, fugiat at libero? Excepturi dolorum animi quisquam ut perspiciatis rem facilis assumenda perferendis inventore, cum minima quaerat doloribus ad? Labore blanditiis dolor laudantium dolorum, quia eius, dignissimos quam sequi culpa architecto et iusto exercitationem sed voluptates consequatur nulla dolores reiciendis. Voluptate, maiores provident a unde voluptatem enim cumque rerum!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
