<title>Kelem Borges - Nova Cliente</title>
@extends('dashboard')
@section('dashboard')
    <div class="p-3">
            @if (isset($data))
                    <form action="{{ route('client.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="{{ route('client.save') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @endif
            @csrf
            <input type="hidden" id="id" name="id" placeholder="" 
                    value="{{ isset($data->id) ? $data->id : '' }}">
            <div class="flex flex-col gap-5">
                <div class="title w-full text-5xl">
                    <h1>{{ isset($data) ? 'Editar Cliente' : 'Novo Cliente' }}</h1>
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full" for="name">Nome</label>
                    <input name="name" type="text" class="border-[2px] p-1 w-4/12 outline-none" id="name" placeholder="Nome do cliente" value="{{ isset($data->name) ? $data->name : '' }}">
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full" for="whatsapp">Idade</label>
                    <input name="age" type="number" class="border-[2px] p-1 w-4/12 outline-none" id="age" placeholder="Idade do cliente" value="{{ isset($data->age) ? $data->age : '' }}">
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full" for="whatsapp">WhatsApp</label>
                    <input name="whatsapp" type="text" class="border-[2px] p-1 w-4/12 outline-none" id="whatsapp" placeholder="WhatsApp do cliente" value="{{ isset($data->whatsapp) ? $data->whatsapp : '' }}">
                </div>
                <div class="flex flex-wrap">
                    <button type="submit" class="py-1 px-8 text-white w-4/12 outline-none" style="background: #054141">Salvar</button>
                </div>
            </form>
            </div>
    </div>
@endsection
