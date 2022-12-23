<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "DIk Dik Nur Illahi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid molestias perferendis corrupti? Perspiciatis placeat ea deleniti magni iste dolorem suscipit, eius similique voluptatibus impedit incidunt ducimus ipsa quam ratione accusamus dolore architecto voluptate numquam ab sapiente eum! Consequuntur, nemo assumenda. Repudiandae voluptatum minus eaque facilis vero repellat ad ratione necessitatibus, mollitia nemo? Libero aliquam similique ipsa cumque dicta adipisci consequuntur id quod tempore sequi! Placeat ipsum eius et inventore cumque at, culpa ut aspernatur dolores, ea porro deserunt provident. Quia!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Farhat ganteng",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident neque tenetur at rem eaque ipsum laudantium, et incidunt aut odio ipsa impedit officia error sunt numquam molestiae? Eos laboriosam minima, quisquam, debitis natus ipsa odio sit velit, unde libero in assumenda distinctio! Velit iste consectetur, unde vero enim earum accusamus nisi aliquid laudantium laborum? Dicta molestiae porro non repudiandae, nesciunt iure impedit perferendis eius iste quo exercitationem quam perspiciatis veritatis inventore error culpa iusto distinctio consectetur libero, delectus temporibus sequi ratione esse. Consectetur delectus recusandae est repellendus sit voluptate ipsum, sint incidunt impedit quia molestiae pariatur totam culpa vero."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
