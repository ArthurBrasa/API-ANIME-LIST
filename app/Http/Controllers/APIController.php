<?php

namespace App\Http\Controllers;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        # retorne uma view de boas vindas
        return view('welcome');

    }
    //
}
