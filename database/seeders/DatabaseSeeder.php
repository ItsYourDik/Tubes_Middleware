<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        User::create([
            'name' => 'Dik Dik Nur Illahi',
            'username' => 'Naraka',
            'Email' => 'dikdiknurillahi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Farhat ganteng',
        //     'Email' => 'farhatganteng@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Mountain',
            'slug' => 'mountain'
        ]);

        Category::create([
            'name' => 'Waterfall',
            'slug' => 'waterfall'
        ]);

        Category::create([
            'name' => 'Lake',
            'slug' => 'lake'
        ]);

        Category::create([
            'name' => 'Forest',
            'slug' => 'forest'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nostrum unde distinctio sit totam cupiditate possimus aperiam. Aliquam sint corporis minima dolor placeat eaque deserunt, sit, reprehenderit, aperiam at beatae.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nostrum unde distinctio sit totam cupiditate possimus aperiam. Aliquam sint corporis minima dolor placeat eaque deserunt, sit, reprehenderit, aperiam at beatae.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nostrum unde distinctio sit totam cupiditate possimus aperiam. Aliquam sint corporis minima dolor placeat eaque deserunt, sit, reprehenderit, aperiam at beatae.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nostrum unde distinctio sit totam cupiditate possimus aperiam. Aliquam sint corporis minima dolor placeat eaque deserunt, sit, reprehenderit, aperiam at beatae.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ad aliquam dolorem quibusdam veniam obcaecati modi harum, corporis assumenda laboriosam autem dolores quae odio perferendis aperiam doloremque accusantium praesentium optio officiis, illum facilis. Voluptates illum similique dignissimos et, odit aspernatur nisi necessitatibus corrupti voluptatum aliquid accusantium enim vitae. Ad enim sunt similique nemo, sit optio nihil quibusdam praesentium eveniet voluptates doloremque? Nesciunt, laudantium! Aut exercitationem pariatur qui. Quidem mollitia, vitae praesentium numquam rerum quisquam qui, nisi aut, eaque cumque deserunt inventore odit! Corporis quos obcaecati praesentium est quam natus voluptate nostrum velit quibusdam ad non ut, ab ea adipisci aut!</p>'
        // ]);
    }
}
