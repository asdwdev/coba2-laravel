<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
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
        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate quis ex at expedita quae quisquam. Voluptates fugiat est quasi repellat dolore temporibus ut suscipit consequatur, soluta rerum, exercitationem, dolor laborum repellendus expedita sequi</p><p>excepturi nemo error quam culpa facere incidunt odio eum qui? Et quam amet placeat, vel dignissimos iure, velit assumenda laboriosam blanditiis veritatis harum? Sunt iste iure, consequatur illum obcaecati animi dolores cumque laborum autem ipsam sapiente quas velit sequi totam corrupti sit nam impedit voluptatem! Obcaecati, molestias error? Delectus eius</p><p>distinctio facere saepe, quis aliquam quia exercitationem nam voluptates repudiandae omnis in aliquid aperiam atque similique accusamus assumenda impedit corrupti pariatur ut repellendus optio voluptatem? Voluptates cupiditate iusto provident molestiae assumenda numquam quibusdam dolores nesciunt tenetur architecto deleniti distinctio fugit accusamus ipsa unde ad hic error recusandae laborum, vero veniam molestias cum? Neque excepturi quae sit aut. Voluptate nostrum beatae dolorem! Tempora?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate quis ex at expedita quae quisquam. Voluptates fugiat est quasi repellat dolore temporibus ut suscipit consequatur, soluta rerum, exercitationem, dolor laborum repellendus expedita sequi</p><p>excepturi nemo error quam culpa facere incidunt odio eum qui? Et quam amet placeat, vel dignissimos iure, velit assumenda laboriosam blanditiis veritatis harum? Sunt iste iure, consequatur illum obcaecati animi dolores cumque laborum autem ipsam sapiente quas velit sequi totam corrupti sit nam impedit voluptatem! Obcaecati, molestias error? Delectus eius</p><p>distinctio facere saepe, quis aliquam quia exercitationem nam voluptates repudiandae omnis in aliquid aperiam atque similique accusamus assumenda impedit corrupti pariatur ut repellendus optio voluptatem? Voluptates cupiditate iusto provident molestiae assumenda numquam quibusdam dolores nesciunt tenetur architecto deleniti distinctio fugit accusamus ipsa unde ad hic error recusandae laborum, vero veniam molestias cum? Neque excepturi quae sit aut. Voluptate nostrum beatae dolorem! Tempora?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate quis ex at expedita quae quisquam. Voluptates fugiat est quasi repellat dolore temporibus ut suscipit consequatur, soluta rerum, exercitationem, dolor laborum repellendus expedita sequi</p><p>excepturi nemo error quam culpa facere incidunt odio eum qui? Et quam amet placeat, vel dignissimos iure, velit assumenda laboriosam blanditiis veritatis harum? Sunt iste iure, consequatur illum obcaecati animi dolores cumque laborum autem ipsam sapiente quas velit sequi totam corrupti sit nam impedit voluptatem! Obcaecati, molestias error? Delectus eius</p><p>distinctio facere saepe, quis aliquam quia exercitationem nam voluptates repudiandae omnis in aliquid aperiam atque similique accusamus assumenda impedit corrupti pariatur ut repellendus optio voluptatem? Voluptates cupiditate iusto provident molestiae assumenda numquam quibusdam dolores nesciunt tenetur architecto deleniti distinctio fugit accusamus ipsa unde ad hic error recusandae laborum, vero veniam molestias cum? Neque excepturi quae sit aut. Voluptate nostrum beatae dolorem! Tempora?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae nisi sint earum ullam cupiditate quis ex at expedita quae quisquam. Voluptates fugiat est quasi repellat dolore temporibus ut suscipit consequatur, soluta rerum, exercitationem, dolor laborum repellendus expedita sequi</p><p>excepturi nemo error quam culpa facere incidunt odio eum qui? Et quam amet placeat, vel dignissimos iure, velit assumenda laboriosam blanditiis veritatis harum? Sunt iste iure, consequatur illum obcaecati animi dolores cumque laborum autem ipsam sapiente quas velit sequi totam corrupti sit nam impedit voluptatem! Obcaecati, molestias error? Delectus eius</p><p>distinctio facere saepe, quis aliquam quia exercitationem nam voluptates repudiandae omnis in aliquid aperiam atque similique accusamus assumenda impedit corrupti pariatur ut repellendus optio voluptatem? Voluptates cupiditate iusto provident molestiae assumenda numquam quibusdam dolores nesciunt tenetur architecto deleniti distinctio fugit accusamus ipsa unde ad hic error recusandae laborum, vero veniam molestias cum? Neque excepturi quae sit aut. Voluptate nostrum beatae dolorem! Tempora?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
