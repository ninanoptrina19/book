<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $book = Book::all();
        // dd($book);
        return view('home', ['listbook'=>$book]);
    }

    public function add(Request $request){
        // dd($request);
        $book = new Book;  // membuat object model/tabel baru
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->tahun = $request->tahun;
        $book->penerbit = $request->penerbit;

        $book->save();  // insert data ke database
        return redirect()->back()->with('success');
    }
    public function edit(Request $request){
        // dd($request);
        $book = Book::find($request->id); // membuat object model/tabel baru
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->tahun = $request->tahun;
        $book->penerbit = $request->penerbit;

        $book->save();  // insert data ke database
        return redirect()->back()->with('success');
    }
    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('success');

    }
    public function detail($id){
        $book = Book::find($id);
        //dd($book);
        return view('detail',['book'=>$book]);
    }
        



    //
}
