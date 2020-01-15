<?php

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
    //$this->call(Gajih::class);
    $this->call(ArtikelSeeder::class);
    // $this->call(PostSeeder::class);
    }
}
