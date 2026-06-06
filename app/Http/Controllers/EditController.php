<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(){
        $page = 'partial.edit';
        return view('index', [
            'page' => $page
        ]);
    }
}