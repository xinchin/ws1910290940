<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function index(Request $request){
        $users = ['aaa','bbb','ccc','ddd','eee'];
        // return view('/Home/Index')->with('users', $users)->with('title', 'xx');
        return view('Home.index');
    }
    public function test(){
        echo  'Home::test::test';
    }
}
