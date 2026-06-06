<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){
        $page = 'partial.add';
        return view('index', [
            'page' => $page
        ]);
    }
}
