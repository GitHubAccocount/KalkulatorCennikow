<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function showMore()
    {
        return view('more.more');
    }
}
