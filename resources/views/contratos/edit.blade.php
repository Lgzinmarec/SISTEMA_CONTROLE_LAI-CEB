<div class="mb-3">
    <label>Empresa</label>
    <select name="empresa_id" class="form-control" required>
        <option value="">Selecione...</option>
        @foreach($empresas as $empresa)
            <option value="{{ $empresa->id }}"
                @if(old('empresa_id') == $empresa->id) selected @endif>
                {{ $empresa->nome }}
            </option>
        @endforeach
    </select>
</div>
