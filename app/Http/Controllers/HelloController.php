<?php

namespace App\Http\Controllers;


class HelloController extends Controller
{

    public function helloDefault(){

        return 'Hello world! ';
    }

    public function hello($nome){

        return 'Hello world! '.$nome;
    }

    //
}
