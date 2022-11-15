<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function index()
    {
        return view('pages/Generate/generate');
    }

    public function input_passage()
    {
        return view('pages/Generate/input_passage');
    }

    public function preview_passage()
    {
        return view('pages/Generate/preview_passage');
    }

    public function generate_result()
    {
        return view('pages/Generate/generate_result');
    }
}
