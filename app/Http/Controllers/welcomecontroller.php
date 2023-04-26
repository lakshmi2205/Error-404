<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\welcome;

class welcomecontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}