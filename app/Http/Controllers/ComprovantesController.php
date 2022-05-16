<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprovantesController extends Controller{
    public function index(){
    $comprovantes = ["teste", "teste1", "teste3"];

    return view('comprovantes.index', compact('comprovantes'));
    }

    public function create()
    {

        return view('comprovantes.create');
    }
}