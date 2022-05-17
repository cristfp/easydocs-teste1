<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Comprovantes;
use Illuminate\Http\Request;

class ComprovantesController extends Controller
{
    public function index()
    {
        
        $comprovantes = Comprovantes::all();
        return response()->json($comprovantes);
        
    }
    public function show($id)
    {
        $comprovante = Comprovantes::find($id);
        $status = Comprovantes::find($status);
        if(!$comprovante && $status == "true") {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($comprovante);
    }
}