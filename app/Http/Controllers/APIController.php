<?php

namespace App\Http\Controllers;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * @OA\Get(
     *     path="/",
     *     @OA\Response(response="200", description="Pagina Inicial")
     * )/
     */
    public function index(){
        # retorne uma view de boas vindas
        return view('welcome');

    }
    //
}
