<title>Kelem Borges - Nova Cliente</title>
@extends('dashboard')
@section('dashboard')
    <div class="col-lg-6 m-3 p-3 bg-white">
            @if (isset($data))
                    <form action="{{ route('client.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="{{ route('client.save') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @endif
            @csrf
            <input type="hidden" id="id" name="id" placeholder="" class="form-control" 
                    value="{{ isset($data->id) ? $data->id : '' }}">
            <div class="form-group">
                <label for="name">Novo Cliente</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Nome Do cliente" value="{{ isset($data->name) ? $data->name : '' }}">
            </div>
            <div class="form-group">
                <label for="whatsapp">Idade</label>
                <input name="age" type="number" class="form-control" id="age" placeholder="Idade do cliente" value="{{ isset($data->age) ? $data->age : '' }}">
            </div>
            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input name="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="WhatsApp do cliente" value="{{ isset($data->whatsapp) ? $data->whatsapp : '' }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection
