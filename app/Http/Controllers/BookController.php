<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        $page = 'partial.add';
        return view('index', [
            'page' => $page
        ]);
    }
}
