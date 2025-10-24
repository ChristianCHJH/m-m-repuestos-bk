<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\JsonResponse;

class EmpresaController extends Controller
{
    public function index(): JsonResponse
    {
        $empresas = Empresa::query()->orderBy('id', 'asc')->get();
        return response()->json($empresas);
    }
}

