<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){
        $page = 'partial.add';
        return view('index', [
            'page' => $page
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required|string|max:100',
            'author' => 'required|string|max:100',
            'publisher' => 'required|string|max:100',
            'year' => 'required|string|max:4',
            'category' => 'required|string|max:50'
        ]);

        Book::create($data);
        return redirect(route('home'));
    }
}
