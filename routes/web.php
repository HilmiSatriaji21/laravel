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

Route::get('pesan/{pesanan1?}/{pesanan2?}/{harga?}',function($pesan1=null,$pesan2=null,$harga=null) {


    if ($pesan1) {
        echo "<b>Anda Memesan " . $pesan1 . "<b>";
    }
    if ($pesan2) {
        echo " Dan Anda Memesan " . "<b>" . $pesan2 . "</b>";
    }
    if ($harga) {
        echo " Dengan Harga " . "<b>" . $harga . "</b>";
    }
    if ( !$pesan1 && !$pesan2 && !$harga ) {
        echo "<b>Anda Tidak Memesan Apa-apa</b>";
    }
});

Route::get('halo/{nama?}',function($nama='Hilmi Satriaji') {
    return 'Halo Nama Saya Adalah <b>'.$nama.'</b>';
});

// Tes1
Route::get('/testmodel', function() {
$testmodel = App\Post::all();
return $testmodel;
});

// Tes2
Route::get('/testmodel2', function() {
$testmodel2 = App\Post::find(4);
return $testmodel2;
});

// Tes3
Route::get('/testmodel3', function() {
$testmodel3 = App\Post::where('title','content','%cepat nikah%')->get();
return $testmodel3;
});

// Tes4
Route::get('/testmodel4', function() {
    $post = App\Post::find(4);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
return $post;
});

// Tes5
Route::get('/testmodel5', function() {
    $post = App\Post::find(4);
    $post->delete();
// check data di database
});

// Tes6
Route::get('/testmodel6', function() {
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
return $post;
// check record baru di database
});

// Tes1
Route::get('/penggajian', function() {
$p = App\Gajih::all();
return $p;
});

Route::get('data=gaji/1', function() {
$gaji = App\Gajih::select('id','nama','agama')->get();
return $gaji;
});
Route::get('data=gaji/2', function() {
$gaji = App\Gajih::select('id','nama','agama')
        ->where('agama','=','islam')
        ->get();
        return $gaji;
});

Route::get('data=gaji/(id)', function($id) {
$gaji = App\Gajih::findOrFail($id);
return $gaji;
});

Route::get('tambah-data-gaji', function()
{
    $gaji = New App\Gajih();
    $gaji->nama = 'Hilmi Satriaji F';
    $gaji->jabatan = 'Lead';
    $gaji->jenis_kelamin = 'Laki-Laki';
    $gaji->alamat = 'Bandung';
    $gaji->total_gaji = 1000;
    $gaji->agama = 'Islam';
    $gaji->save();
    return $gaji;

});

Route::get('hi', 'SekolahController@hallo');
Route::get('name', 'SekolahController@nama');
Route::get('date', 'SekolahController@tanggal');
Route::get('life', 'SekolahController@tinggal');
Route::get('hobby', 'SekolahController@hobi');
Route::get('warnakucing/{warna?}/{jenis?}', 'SekolahController@jeniskucing' );
Route::get('mesan/{jenis?}/{warna?}/{harga?}', 'SekolahController@jenis');
?>
