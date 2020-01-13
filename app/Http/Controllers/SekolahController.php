<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function hallo()
    {
        return "Hallo Dunia Gue Baru Netas";
    }
    public function nama()
    {
        return "Nama Saya Hilmi Satriaji Firmansyah Salken Hehe";
    }
    public function tanggal()
    {
        return "Saya Lahir Tanggal 21 September 2003";
    }
    public function tinggal()
    {
        return "Saya Tinggal Di Bumi Lahir Di Bandung";
    }
    public function hobi()
    {
        return "Hobby Saya Bersepeda";
    }
    public function jeniskucing ($color=null,$jenis=null)
    {
        {
    if ($color) {
        echo "<hr><b>Warna Kucing Kamu " . $color . "<b></hr>";
    }
    if ($jenis) {
        echo "<hr><b> Dan Jenis Kucing Kamu  " . "<b>" . $jenis . "</hr></b>";
        echo "<hr></hr>";
    }
        }
    }
    public function jenis($jenis=null,$warna=null,$harga=null)
    {
    if ($jenis) {
        echo "<b>Anda Memilih Jenis " . $jenis . "<b>";
    }
    if ($warna) {
        echo " Dan Anda Memilih Warna " . "<b>" . $warna . "</b>";
    }
    if ($harga <= 15000000) {
        echo " Dengan Ukuran Jumbo Dengan Harga " . "<b>" . $harga . "</b>";
    }
    if ($harga <= 1500000) {
        echo " Dengan Ukuran Medium Dengan Harga " . "<b>" . $harga . "</b>";
    }
    if ($harga <= 150000) {
        echo " Dengan Ukuran Normal Dengan Harga " . "<b>" . $harga . "</b>";
    }
    if ( !$jenis && !$warna && !$harga ) {
        echo "<b>Anda Tidak Memesan Apa-apa</b>";
    }
}

}

