<?php

use App\Artikel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no = 5;
        for ($i = 0; $i < $no; $i++){
        $artikel = new Artikel();
        $artikel->judul = 'Belajar Membuat Controller' . $i;
        $artikel->slug = Str::slug($artikel->judul, '-');
        $artikel->deskripsi = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $artikel->sinopsis = Str::limit($artikel->deskripsi, 50);
        $artikel->save();
        }
    }
}
