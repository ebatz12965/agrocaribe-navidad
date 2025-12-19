<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companero;

class BusquedaController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function buscar(Request $request)
    {
        $q = $request->query('q');

        if (!$q || strlen($q) < 2) {
            return response()->json([]);
        }

        $companeros = Companero::where('nombre_completo', 'LIKE', "%{$q}%")
            ->orderBy('nombre_completo')
            ->get(['id', 'nombre_completo']);

        return response()->json($companeros);
    }

    public function mensaje($id)
    {
        $companero = Companero::with('mensaje')->findOrFail($id);
        return view('tarjeta', compact('companero'));
    }
}
