<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Posts_Canceled
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Bambang Pamungkas",
            "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem voluptatibus excepturi et sunt culpa consequuntur nam nostrum, sit, doloremque consequatur quia vero nemo hic dicta quasi quas eligendi voluptate. Inventore expedita harum repellat. Voluptatem eaque inventore magni quos aliquam. Exercitationem cum, quis aspernatur officiis maxime, ullam voluptatibus explicabo necessitatibus quidem ex quam, consectetur distinctio. Facere quis aspernatur accusantium ipsam obcaecati qui sed aliquam fugit dolor iure, ad voluptate architecto omnis! Rem minus blanditiis, impedit fuga voluptas ipsa pariatur. Laudantium, nisi?"
        ],
        [
            "title" => "Judul Post Keuda",
            "slug" => "judul-tulisan-kedua",
            "author" => "Raihan Maulina",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur officiis vel saepe ratione corporis velit eius totam delectus, ab excepturi quos repellat accusamus consequuntur quibusdam amet voluptates sequi dolore autem ullam veniam. Ullam, asperiores! Nihil, nostrum asperiores iure exercitationem molestias ea ab iste dolores. Sed harum fuga omnis iusto, eligendi officia, dolor iure vero voluptate nobis quibusdam nostrum dicta molestiae sapiente id. Temporibus eveniet itaque porro! Doloribus, fugiat tempore! Perspiciatis, accusamus ad labore modi ratione distinctio fugit rerum nulla vel, iure sed libero. Sequi, ex laborum? Error iusto nisi voluptatum minima incidunt aut similique voluptas eaque, sint ea dicta atque."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-tulisan-ketiga",
            "author" => "Dinda Maharani",
            "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, nobis. Aliquid qui natus eligendi autem mollitia assumenda praesentium quo, totam rem? Incidunt nemo in, culpa, perspiciatis nam adipisci mollitia ad alias expedita ea veritatis deleniti modi labore deserunt autem aperiam explicabo molestiae hic assumenda vitae eaque possimus atque, est dolor? Suscipit quidem aperiam sint, dignissimos molestiae tempore molestias impedit deleniti?"
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $array_post = [];

        // foreach ($posts as $post) {
        //     if($post["slug"] === $slug) {
        //         $array_post = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
