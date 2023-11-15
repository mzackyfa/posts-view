<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', = () => {
    return view('about', [
        "title" => "About",
        "name" => "Mochamad Zacky",
        "welcome" => "welcome",
        "image" => "zahsey.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
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
            "title" => "Judul Post Kedua",
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
