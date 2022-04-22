<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  
    public function index()
    {
        $books = Book::all();
        return $books;
    }

   public function store(Request $request)
    {
        
    }

   public function show($id)
    {
        //
    }

   public function update(Request $request, $id)
    {
        //
    }

   public function destroy($id)
    {
        //
    }
}
