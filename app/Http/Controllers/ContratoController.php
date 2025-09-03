<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Categoria;
use App\Models\Empresa;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
  public function index(Request $request)
{
    $categorias = Categoria::all();
    $empresas = Empresa::all();

    $query = Contrato::with(['categoria', 'empresa']); 

    if ($request->filled('categoria_id')) {
        $query->where('categoria_id', $request->categoria_id);
    }

    if ($request->filled('empresa_id')) {
        $query->where('empresa_id', $request->empresa_id);
    }

    $contratos = $query->latest()->paginate(10); 

    return view('contratos.index', compact('contratos', 'categorias', 'empresas'));
}


 
    public function create()
    {
        $categorias = Categoria::all();
        $empresas = Empresa::all();

        return view('contratos.create', compact('categorias', 'empresas'));
    }

    public function store(Request $request)
    {
         
     $request->validate([
    'solicitante' => 'required',
    'data_atualizacao' => 'required|date',
    'recebimento' => 'required|date',
    'data_lai' => 'required|date',
    'publicacao' => 'required',
    'categoria_id' => 'required|exists:categorias,id',
    'empresa_id' => 'required|exists:empresas,id', 
]);


        Contrato::create($request->all());

        return redirect()->route('contratos.index')->with('success', 'Contrato cadastrado com sucesso!');
    }
}
