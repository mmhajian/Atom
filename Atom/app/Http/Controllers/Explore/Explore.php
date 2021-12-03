<?php

namespace App\Http\Controllers\Explore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Explore extends Controller
{
    public function index()
    {
        return view("explore.explore");
    }
}
