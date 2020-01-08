<?php

// Route Basic
Route::get('/about', function () {
return '<h1>Halo</h1>' .
       'Selamat Datang Di WebApp Saya<br>' .
       'Laravel, Memang Keren.';
});

/*Route::get('profil',function()
{
    return view('biodata');
});

Route::get('profil2',function()
{
    return view('biodata2');
});

Route::get('profil3',function()
{
    return view('biodata3');
});

Route::get('profil4',function()
{
    return view('biodata4');
});

Route::get('profil5',function()
{
    return view('biodata5');
});*/

// Route Parameter

Route::get('makanan/{makan}',function($mkn) {
    return 'Makanan Yang Saya Pesan Adalah <b>'.$mkn.'</b>';
});
