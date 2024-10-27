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
        'title' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'name' => 'imsol',
        'email' => 'imsol@gmail.com',
        'image' => 'imsol.jpg'
    ]);
});

Route::get('/posts', function () {
    $blog_posts = [
        [
            'title' => 'judul post pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'sandhika galih',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur reprehenderit excepturi fuga! Iure blanditiis delectus adipisci. Veritatis vel perspiciatis incidunt sequi magnam ipsum fugiat laudantium impedit officia, dolorum cumque quo molestias dolore quod non temporibus sint exercitationem eaque error optio. Possimus sit maxime perferendis consequatur minus qui ipsa, pariatur omnis ipsum illo reiciendis culpa praesentium ut beatae totam laboriosam, consequuntur libero error aliquam, nihil rem. Distinctio ipsa, repellat ut quaerat error obcaecati debitis eius quisquam iure, dolorem recusandae. Iusto, ea.'
        ],
        [
            'title' => 'judul post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'doddy ferdiansyah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi blanditiis ratione et ex molestiae commodi voluptatibus sed veritatis fuga natus, inventore quos debitis iure, expedita laboriosam eius dolor, omnis a qui! Harum quos, laboriosam omnis hic illo quasi ad dolorum velit, magnam voluptate odio! Nesciunt optio illum, possimus tempora alias corrupti totam sequi! Quibusdam repellendus ea natus at delectus consequatur? Veritatis exercitationem voluptates assumenda quas nam, sint corrupti aliquid necessitatibus culpa beatae id cum expedita laboriosam tempora enim ipsam officia porro quam vitae facilis doloribus! Quibusdam, doloremque id deserunt corrupti mollitia perferendis repellat ducimus dolorem vitae doloribus voluptatem perspiciatis tenetur!'
        ],
    ];

    return view('posts', [
        'title' => 'posts',
        'posts' => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'judul post pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'sandhika galih',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur reprehenderit excepturi fuga! Iure blanditiis delectus adipisci. Veritatis vel perspiciatis incidunt sequi magnam ipsum fugiat laudantium impedit officia, dolorum cumque quo molestias dolore quod non temporibus sint exercitationem eaque error optio. Possimus sit maxime perferendis consequatur minus qui ipsa, pariatur omnis ipsum illo reiciendis culpa praesentium ut beatae totam laboriosam, consequuntur libero error aliquam, nihil rem. Distinctio ipsa, repellat ut quaerat error obcaecati debitis eius quisquam iure, dolorem recusandae. Iusto, ea.'
        ],
        [
            'title' => 'judul post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'doddy ferdiansyah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi blanditiis ratione et ex molestiae commodi voluptatibus sed veritatis fuga natus, inventore quos debitis iure, expedita laboriosam eius dolor, omnis a qui! Harum quos, laboriosam omnis hic illo quasi ad dolorum velit, magnam voluptate odio! Nesciunt optio illum, possimus tempora alias corrupti totam sequi! Quibusdam repellendus ea natus at delectus consequatur? Veritatis exercitationem voluptates assumenda quas nam, sint corrupti aliquid necessitatibus culpa beatae id cum expedita laboriosam tempora enim ipsam officia porro quam vitae facilis doloribus! Quibusdam, doloremque id deserunt corrupti mollitia perferendis repellat ducimus dolorem vitae doloribus voluptatem perspiciatis tenetur!'
        ],
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'single post',
        'post' => $new_post
    ]);
});
