<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use phpDocumentor\Reflection\Types\Nullable;

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
            'name' => 'Sara Perselia Angaraini',
            'username' => 'Sara Perselia',
            'email' => 'perseliasara@gmail.com',
            'password' => bcrypt('678910'),
        ]);

        // User::create([
        //     'name' => 'Nur Rahmatulisa',
        //     'email' => 'nurrahmatulisa123@gmail.com',
        //     'password' => bcrypt('12345'),

        User::factory(2)->create();

        Category::create([
            'name' => 'Dress',
            'slug' => 'dress'
        ]);

        Category::create([
            'name' => 'T-Shirt',
            'slug' => 't-shirt'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Ayana Dress',
        //     'slug' => 'ayana dress',
        //     'excerpt' => 'Ayana Dress By Cah Bocah',
        //     'body' => 'Ayana Dress By Cah Bocah menggunakan bahan premium katun combed 30s sehingga anak-anak akan nyaman ketika memakainya',
        //     'category_id' => 1,
        //     'post_id' => 1        
        // ]);

         // Post::create([
        //     'title' => 'Nameera Dress',
        //     'slug' => 'nameera dress',
        //     'excerpt' => 'Nameera Dress By Cah Bocah',
        //     'body' => 'Nameera Dress By Cah Bocah menggunakan bahan premium katun combed 30s sehingga anak-anak akan nyaman ketika memakainya',
        //     'category_id' => 1,
        //     'post_id' => 2        
        // ]);

         // Post::create([
        //     'title' => 'Ruffle T-Shirt',
        //     'slug' => ' ruffle t-shirt',
        //     'excerpt' => 'Ruffle T-Shirt Dress By Cah Bocah',
        //     'body' => 'Ruffle T-Shirt By Cah Bocah menggunakan bahan premium katun combed 30s sehingga anak-anak akan nyaman ketika memakainya',
        //     'category_id' => 1,
        //     'post_id' => 1        
        // ]);

        
    }
}

