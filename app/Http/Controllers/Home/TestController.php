<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function index(Request $request){
        echo 'Home::test::index';
        echo '<hr>';
    }
    public function test(){
        echo  'Home::test::test';
    }
}
