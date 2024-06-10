<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function Create(Request $request)
    {

        $book_created = Book::create([
            'book_category_id' => $request->book_category_id,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'lokasi' => $request->lokasi,
            'jumlah_stok' => $request->jumlah_stok,
        ]);
        return redirect("book/view")->with("success", "success tambah buku");
    }
    public function Update(Request $request)
    {

        Book::where("id", $request->id)->update([
            'book_category_id' => $request->book_category_id,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'lokasi' => $request->lokasi,
            'jumlah_stok' => $request->jumlah_stok,
        ]);
        return redirect("book/view")->with("success", "success tambah buku");
    }

    public function Delete($id)
    {
        Book::where("id", $id)->delete();

        return redirect("book/view")->with("success", "success hapus buku");
    }
}
