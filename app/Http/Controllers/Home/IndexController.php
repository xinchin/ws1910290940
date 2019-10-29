<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        echo 'Home::index::index';
    }
}
