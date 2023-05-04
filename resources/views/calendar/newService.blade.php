<title>Kelem Borges - Novo Atendimento</title>
@extends('dashboard')
@section('dashboard')
    <div class="col-lg-6 m-3 p-3 bg-white">
        @if (isset($data))
            <form action="{{ route('procedure.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @method('PUT')
            @else
                <form action="{{ route('calendar.save') }}" method="post" class="form-horizontal"
                    enctype="multipart/form-data">
        @endif
        @csrf
        <input type="hidden" id="id" name="id" placeholder="" class="form-control"
            value="{{ isset($data->id) ? $data->id : '' }}">
       
        <div class="form-group">
            <label for="name">Cliente</label>
            <select name="client" class="form-select" aria-label="Default select example">
                <option selected>Selecione um cliente</option>
                @foreach ($client as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="whatsapp">Procedimento</label>
            <select name="procedure[]" class="form-select" multiple aria-label="Default select example">
                <option selected>Selecione um cliente</option>
                @foreach ($procedure as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="whatsapp">Data</label>
            <input name="date" type="date" class="form-control" id="qtd_session">
        </div>
        <div class="form-group">
            <label for="whatsapp">Início</label>
            <input name="start" type="time" class="form-control" id="days_return">
        </div>
        <div class="form-group">
            <label for="whatsapp">Fim</label>
            <input name="end" type="time" class="form-control" id="days_return">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
    </div>
@endsection
