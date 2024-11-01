<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        $catalogos = Catalogo::with('procesos')->get();
        return response()->json($catalogos);
    }
}
