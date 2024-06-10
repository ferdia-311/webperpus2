<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookApiController extends Controller
{
    public function getAll()
    {
        $book = Book::get();

        return response()->json([
            "message" => "success get all",
            "data" => $book
        ]);
    }
    public function getById($id)
    {


        $book = Book::where("id", $id)->first();

        return response()->json([
            "message" => "success get by id",
            "data" => $book
        ]);
    }
    public function create(Request $request)
    {

        $book =  Book::create([
            'book_category_id' => $request->book_category_id,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'lokasi' => $request->lokasi,
            'jumlah_stok' => $request->jumlah_stok,
        ]);

        return response()->json([
            "message" => "success create",
            "data" => $book
        ]);
    }
    public function update($id, Request $request)
    {

        $book =  Book::where("id", $id)->update([
            'book_category_id' => $request->book_category_id,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'lokasi' => $request->lokasi,
            'jumlah_stok' => $request->jumlah_stok,
        ]);

        return response()->json([
            "message" => "success update",
            "data" => $book
        ]);
    }
    public function delete($id)
    {
        $book = Book::where("id", $id)->first();

        $book->delete();

        return response()->json([
            "message" => "success delete",

        ]);
    }
}
