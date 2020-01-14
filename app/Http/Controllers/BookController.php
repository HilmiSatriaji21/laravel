<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    // Menampilkan Semua Data
    public function index()
    {
        $book = Book::all();
        return $book;
    }
    // Membuat Data Baru
    public function create($judul)
    {
        $book = new Book;
        $book->title = $judul;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 150000;
        $book->status = false;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function show($id)
    {
        // Melihat/Mengecek Data Sesuai Id
        $book = Book::find($id);
        return $book;
    }
    public function edit($id,$judul)
    {
        // Meng-Edit Data Sesuai Id
        $book = Book::find($id);
        $book->title = $judul;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 150000;
        $book->status = false;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function delete($id)
    {
        // Meng-Hapus Data
        $book = Book::find($id);
        $book->delete();
        return $book;
    }
    public function select()
    {
        $book = Book::select('title','publisher','pages','price')->take(3)->get();
        return $book;
    }

}
