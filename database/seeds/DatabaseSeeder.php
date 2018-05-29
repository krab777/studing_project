<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
}

class ArticlesSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();
        Articles::create([
            'name' => 'First Post',
            'content' => 'Content content content 1',
            //'published_at' => DB::raw('CURRENT_TIMESTAMP'), // для timestamp
        ]);

        Articles::create([
            'name' => 'Second Post',
            'content' => 'Content content content 2',
            //'published_at' => DB::raw('CURRENT_TIMESTAMP'), // для timestamp
        ]);

       	Articles::create([
            'name' => 'Third Post',
            'content' => 'Content content content 3',
            //'published_at' => DB::raw('CURRENT_TIMESTAMP'), // для timestamp
        ]);
    }
}
