<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExternalWeddingController extends Controller
{
    public function index()
    {
        return view('layouts.externalwedding');
    }
}
