<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function __construct()
    {
    }
    public function showUser(){

       /* $obj= new \stdClass();
        $obj->id=123;
        $obj->name='Sahab';
        $obj->age=1;*/

        return view('welcome')->with('name1','Dina');
    }


    public function showUserName1(){

        return 'Dina1';
}
    public function showUserName2(){

        return 'Dina2';
    }
}
