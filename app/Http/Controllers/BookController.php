<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::paginate(12);
        return view('products.list_products', compact([
            'categories',
            'books',
        ]));
    }

    public function show(int $id)
    {
        $categories = Category::all();
        $book = Book::findOrFail($id);

        return view('products.detail', compact([
            'categories',
            'book'
        ]));
    }
}
