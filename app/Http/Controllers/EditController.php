<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Book $book){
        $page = 'partial.edit';
        return view('index', [
            'page' => $page
        ]);
    }

    public function update(Request $request, Book $book)
    {
        
    }
}