<title>Kelem Borges - Novo Procedimentos</title>
@extends('dashboard')
@section('dashboard')
    <div class="col-lg-6 m-3 p-3 bg-white">
        @if (isset($data))
            <form action="{{ route('procedure.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @method('PUT')
            @else
                <form action="{{ route('procedure.save') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        @endif
        @csrf
        <input type="hidden" id="id" name="id" placeholder="" class="form-control" 
        value="{{ isset($data->id) ? $data->id : '' }}">
        <div class="form-group">
            <label for="name">Nome</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Nome Do procedimento" value="{{ isset($data->name) ? $data->name : '' }}">
        </div>
        <div class="form-group">
            <label for="whatsapp">Preço</label>
            <input name="price" type="text" class="form-control" id="price" placeholder="Preço do procedimento" value="{{ isset($data->price) ? $data->price : '' }}">
        </div>
        <div class="form-group">
            <label for="whatsapp">Quantidade de Sessão</label>
            <input name="qtd_session" type="text" class="form-control" id="qtd_session"
                placeholder="Quantidade de sessões" value="{{ isset($data->qtd_session) ? $data->qtd_session : '' }}">
        </div>
        <div class="form-group">
            <label for="whatsapp">Dias para retorno</label>
            <input name="days_return" type="text" class="form-control" id="days_return" placeholder="Dias para retorno" value="{{ isset($data->days_return) ? $data->days_return : '' }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
    </div>
@endsection
