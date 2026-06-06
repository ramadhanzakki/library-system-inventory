<?php

namespace App\Http\Controllers;

class EditController extends Controller
{
    public function index(){
        $page = 'partial.edit';
        return view('index', [
            'page' => $page
        ]);
    }
}