@extends('layouts.app')
@section('title', 'Contratos - CEB')
@section('content')
    <h2>Contratos</h2>
    <a href="{{ route('contratos.create') }}" class="btn btn-success mb-3">Novo Contrato</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<form method="GET" action="{{ route('contratos.index') }}" class="row mb-4">
    <div class="col-md-4">
        <label>Filtrar por Categoria</label>
        <select name="categoria_id" class="form-control">
            <option value="">Todas</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}"
                    {{ request('categoria_id') == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        <label>Filtrar por Empresa</label>
        <select name="empresa_id" class="form-control">
            <option value="">Todas</option>
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}"
                    {{ request('empresa_id') == $empresa->id ? 'selected' : '' }}>
                    {{ $empresa->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 d-flex align-items-end">
        <button type="submit" class="btn btn-primary me-2">Filtrar</button>
        <a href="{{ route('contratos.index') }}" class="btn btn-secondary">Limpar</a>
    </div>
</form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Solicitante</th>
                <th>Data Atualização</th>
                <th>Recebimento</th>
                <th>Data LAI</th>
                <th>Publicação</th>
                <th>Categoria</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contratos as $contrato)
                <tr>
                    <td>{{ $contrato->solicitante }}</td>
                    <td>{{ $contrato->data_atualizacao }}</td>
                    <td>{{ $contrato->recebimento }}</td>
                    <td>{{ $contrato->data_lai }}</td>
                    <td>{{ $contrato->publicacao }}</td>
                    <td>{{ $contrato->categoria->nome }}</td>
                    <td>{{ $contrato->empresa->nome ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
