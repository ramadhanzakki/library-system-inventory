<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $page = 'partial.home';
        $books = Book::all();
        $no = 1;

        return view('index', [
            'page' => $page,
            'books' => $books,
            'no' => $no
        ]);
    }

}
