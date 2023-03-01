<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id)
    {
        return view('news')->with('id', $id);
    }

}
