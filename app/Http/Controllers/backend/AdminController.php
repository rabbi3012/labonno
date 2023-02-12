<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function master(){
        return view('backend.master');
    }
    public function page(){
        return view('backend.page.newpage');
    }
}
