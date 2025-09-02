@extends('layouts.app')
@section('title', 'Contratos - CEB')
@section('content')
<h2>Novo Contrato</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('contratos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Solicitante</label>
        <input type="text" name="solicitante" class="form-control" required value="{{ old('solicitante') }}">
    </div>
    <div class="mb-3">
        <label>Data Atualização</label>
        <input type="date" name="data_atualizacao" class="form-control" required value="{{ old('data_atualizacao') }}">
    </div>
    <div class="mb-3">
        <label>Recebimento</label>
        <input type="date" name="recebimento" class="form-control" required value="{{ old('recebimento') }}">
    </div>
    <div class="mb-3">
        <label>Data LAI</label>
        <input type="date" name="data_lai" class="form-control" required value="{{ old('data_lai') }}">
    </div>
    <div class="mb-3">
        <label>Publicação</label>
        <textarea name="publicacao" class="form-control" required>{{ old('publicacao') }}</textarea>
    </div>
    <div class="mb-3">
        <label>Categoria</label>
        <select name="categoria_id" class="form-control" required>
            <option value="">Selecione...</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" @if(old('categoria_id') == $categoria->id) selected @endif>
                    {{ $categoria->nome }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Empresa</label>
        <select name="empresa_id" class="form-control" required>
            <option value="">Selecione...</option>
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}" @if(old('empresa_id') == $empresa->id) selected @endif>
                    {{ $empresa->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Salvar</button>
</form>
@endsection
