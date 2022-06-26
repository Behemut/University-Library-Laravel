<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Fantasy'],
            ['name'=> 'History'],
            ['name'=> 'Horror'],
            ['name'=> 'Mystery'],
            ['name'=> 'Romance'],
            ['name'=> 'Science Fiction'],
            ['name'=> 'Thriller'],
            ['name'=> 'Western']
        ]);
    }
}
