<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{

    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Aditya Nur Huda',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum in at quia ducimus distinctio qui soluta aliquid, sint dolor voluptatibus. Sint minima dolore illum ducimus autem ipsam esse nesciunt fugiat?',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Aditya Nur Huda',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum in at quia ducimus distinctio qui soluta aliquid, sint dolor voluptatibus. Sint minima dolore illum ducimus autem ipsam esse nesciunt fugiat?',
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
