<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Irwan Prasetyo',
        //     'email' => 'irwan3748@gmail.com',
        //     'password' => bcrypt('irwan123')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'UI/UX Designer',
            'slug' => 'ui/ux-designer'
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus, ad aspernatur neque tenetur, vero consequatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus, ad aspernatur neque tenetur, vero consequatur, error voluptates quo distinctio temporibus eveniet eaque ipsa at corrupti possimus. Iste distinctio ipsam quasi cumque atque commodi odit eum cum soluta. Beatae dolorem aliquam possimus consequuntur in, tempora incidunt quidem, rem aperiam sunt accusamus distinctio enim neque architecto totam quis voluptatem libero ipsam? Corporis officia possimus eos labore mollitia necessitatibus, numquam sint qui rem nihil laboriosam autem reiciendis itaque iure molestiae quos vitae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatibus quaerat sed possimus magni',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga voluptatibus quaerat sed possimus magni, laudantium doloribus, libero laboriosam numquam optio voluptas tempore! Vitae officia explicabo tempore, repudiandae animi odio voluptatum placeat quisquam temporibus obcaecati quibusdam beatae autem molestias unde ad suscipit iusto provident reiciendis illum dolores molestiae quod, sed eos? Consequatur officiis reiciendis nostrum impedit. Magnam deleniti dolorum odit quod porro quaerat incidunt! Dolorum tempore aliquid consequatur odio sunt. Ex nisi, laborum, minus dignissimos iusto pariatur minima esse eum velit sequi maxime quos libero perferendis! Odit labore temporibus quasi dolor.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aut earum alias voluptate, perferendis quasi optio totam tenetur explicabo asperiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aut earum alias voluptate, perferendis quasi optio totam tenetur explicabo asperiores ipsum quo officia sint aliquam inventore maiores nam. Repellat, laudantium neque odio vitae asperiores facere suscipit quam, culpa est quidem fuga rerum, sunt omnis. Eos natus cum laudantium, facere enim iusto? Iure magni, impedit at maxime ad illum a. Provident corrupti quos quas ullam, expedita sit ad distinctio ipsa, eligendi qui et corporis esse vero, obcaecati quam. Incidunt et id dolor consequuntur quae beatae sapiente a dolorem cum quaerat nulla aliquam mollitia, nisi voluptates corporis ad vel assumenda dolores dolore, fugiat omnis necessitatibus consectetur? Iure fuga obcaecati minus magnam odio.',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aut earum alias voluptate, perferendis quasi optio totam tenetur explicabo asperiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aut earum alias voluptate, perferendis quasi optio totam tenetur explicabo asperiores ipsum quo officia sint aliquam inventore maiores nam. Repellat, laudantium neque odio vitae asperiores facere suscipit quam, culpa est quidem fuga rerum, sunt omnis. Eos natus cum laudantium, facere enim iusto? Iure magni, impedit at maxime ad illum a. Provident corrupti quos quas ullam, expedita sit ad distinctio ipsa, eligendi qui et corporis esse vero, obcaecati quam. Incidunt et id dolor consequuntur quae beatae sapiente a dolorem cum quaerat nulla aliquam mollitia, nisi voluptates corporis ad vel assumenda dolores dolore, fugiat omnis necessitatibus consectetur? Iure fuga obcaecati minus magnam odio.',
        //     'category_id' => 2,
        //     'user_id' => 4
        // ]);
    }
}
