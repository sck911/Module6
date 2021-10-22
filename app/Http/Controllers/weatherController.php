<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class weatherController extends Controller
{
    /**
     * Display weather forecast to the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function weather()
    {
        return view('weatherlive');
    }
}