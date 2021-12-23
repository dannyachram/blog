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

        // User::create([
        //     'name' => 'Danny Achram',
        //     'email' => 'danny.achram@gmail.com',
        //     'password' => bcrypt('5532115')
        // ]);
        // User::create([
        //     'name' => 'Ahmad Fahruroji',
        //     'email' => 'fahrurojiahmad@gmail.com',
        //     'password' => bcrypt('5532115')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Web Personal',
            'slug' => 'web-personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',

        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis,',

        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis, id sequi est adipisci aperiam distinctio aliquid veritatis molestias ipsam minima dolorem? Fuga facere dicta fugiat natus. Sunt perspiciatis, illo consectetur molestias recusandae perferendis, omnis nam tenetur placeat iure expedita voluptas quos blanditiis amet id deleniti fugit fugiat totam ut laborum laboriosam soluta quas consequuntur ad! Facere corrupti delectus sed eveniet omnis ipsam fuga nesciunt ad beatae debitis eos reprehenderit, laborum tenetur consequatur nam voluptatum dolor recusandae maiores.',

        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',

        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis,',

        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis, id sequi est adipisci aperiam distinctio aliquid veritatis molestias ipsam minima dolorem? Fuga facere dicta fugiat natus. Sunt perspiciatis, illo consectetur molestias recusandae perferendis, omnis nam tenetur placeat iure expedita voluptas quos blanditiis amet id deleniti fugit fugiat totam ut laborum laboriosam soluta quas consequuntur ad! Facere corrupti delectus sed eveniet omnis ipsam fuga nesciunt ad beatae debitis eos reprehenderit, laborum tenetur consequatur nam voluptatum dolor recusandae maiores.',

        //     'category_id' => 1,
        //     'user_id' => 2

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',

        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis,',

        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis, id sequi est adipisci aperiam distinctio aliquid veritatis molestias ipsam minima dolorem? Fuga facere dicta fugiat natus. Sunt perspiciatis, illo consectetur molestias recusandae perferendis, omnis nam tenetur placeat iure expedita voluptas quos blanditiis amet id deleniti fugit fugiat totam ut laborum laboriosam soluta quas consequuntur ad! Facere corrupti delectus sed eveniet omnis ipsam fuga nesciunt ad beatae debitis eos reprehenderit, laborum tenetur consequatur nam voluptatum dolor recusandae maiores.',

        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',

        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis,',

        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni atque repellat nostrum ex? Magnam omnis qui, deserunt provident voluptates iste ut quam fuga nam velit molestias odit dicta, quasi dolor quis, quo at fugit. Ab reiciendis laborum velit, aspernatur dolorem doloribus eligendi repellat a quisquam! Eveniet sunt voluptatum repellat iusto reiciendis, id sequi est adipisci aperiam distinctio aliquid veritatis molestias ipsam minima dolorem? Fuga facere dicta fugiat natus. Sunt perspiciatis, illo consectetur molestias recusandae perferendis, omnis nam tenetur placeat iure expedita voluptas quos blanditiis amet id deleniti fugit fugiat totam ut laborum laboriosam soluta quas consequuntur ad! Facere corrupti delectus sed eveniet omnis ipsam fuga nesciunt ad beatae debitis eos reprehenderit, laborum tenetur consequatur nam voluptatum dolor recusandae maiores.',

        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
