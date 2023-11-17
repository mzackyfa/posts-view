<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Zahsey",
            "slug" => "judul-post-pertama",
            "author" => "Zahsey",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Molestiae pariatur nisi hic libero molestias? Magni consequatur fuga
            consectetur nihil, cum explicabo quia nostrum harum officiis esse labore
            soluta similique voluptate aspernatur voluptatibus fugit aliquam impedit animi a perferendis
            nisi! Fuga dolorum facilis eligendi praesentium est doloribus voluptate impedit quam, dolorem
            , eveniet, culpa asperiores quae placeat commodi nam perferendis aperiam tenetur
            veritatis distinctio illo suscipit porro animi at. Explicabo tenetur doloribus magni
            omnis, incidunt saepe quod! Ab molestiae voluptate porro fugiat."
        ],
        [
            "title" => "Judul Post Zumpy",
            "slug" => "judul-post-kedua",
            "author" => "Zumpy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odio libero quasi
            quibusdam! Error eveniet consequuntur recusandae, perferendis ut perspiciatis exercitationem
            olor vitae? Necessitatibus corporis amet recusandae ipsum doloribus. Beatae molestias placeat
            sequi excepturi earum ea expedita eaque! Necessitatibus neque placeat facilis ullam quas eos
            aliquam magni quasi ratione provident? Fugit accusantium debitis sit expedita porro, sequi voluptatum
            esse ratione, odio ea repellendus? Rerum accusamus id laborum hic atque ducimus ratione in illo rem
            inventore laboriosam cupiditate veniam doloribus odio, maiores, aliquam nam? Ut ipsa sint corrupti aliquam
            tempora neque rerum ratione, in placeat, pariatur id sapiente odio numquam error."
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }
    public static function find($slug)
    {
        $posts = self::$blog_posts;

        $post = [];

        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
