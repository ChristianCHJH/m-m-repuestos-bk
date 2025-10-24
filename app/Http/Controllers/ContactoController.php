<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;

class ContactoController extends Controller
{
    public function index(): JsonResponse
    {
        $contactos = Contacto::with(['empresa:id,razon_social'])
            ->orderBy('id', 'asc')
            ->get(['id','empresa_id','nombre','celular','direccion','correo']);

        return response()->json($contactos);
    }

    public function store(StoreContactoRequest $request): JsonResponse
    {
        $contacto = Contacto::create($request->validated());
        $contacto->loadMissing('empresa:id,razon_social');

        return response()->json($contacto, 201);
    }

    public function show(int $id): JsonResponse
    {
        $contacto = Contacto::with(['empresa:id,razon_social'])
            ->findOrFail($id, ['id','empresa_id','nombre','celular','direccion','correo']);

        return response()->json($contacto);
    }

    public function update(UpdateContactoRequest $request, int $id): JsonResponse
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->update($request->validated());
        $contacto->loadMissing('empresa:id,razon_social');

        return response()->json($contacto);
    }

    public function destroy(int $id): JsonResponse
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();

        return response()->json(['message' => 'Contacto eliminado exitosamente'], 200);
    }
}
