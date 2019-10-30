<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CreateCommonRequest;

class TestController extends Controller
{
    public function index(Request $request){
        return view('Home.index');
    }
    public function test(){
        echo  'Home::test::test';
    }
    public function edit(){
        return view('Home.edit');
    }
    public function store(CreateCommonRequest $request){
        // $this->validate($request, [
        //     'name' => 'required'
        // ]);
    }
}
