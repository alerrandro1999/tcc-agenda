<title>Kelem Borges - Novo Atendimento</title>
@extends('dashboard')
@section('dashboard')
    <section class="p-3">
            @if (isset($data))
                <form action="{{ route('procedure.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form action="{{ route('calendar.save') }}" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
            @endif
            @csrf
            <input type="hidden" id="id" name="id" placeholder="" class="border-[2px] p-1"
                value="{{ isset($data->id) ? $data->id : '' }}">
           
            <div class="flex flex-col gap-5">
                <div class="title w-full text-5xl">
                    <h1>Novo Atendimento</h1>
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full" for="name">Cliente</label>
                    <select name="client" class="border-[2px] p-1 w-4/12 outline-none" aria-label="Default select example">
                        <option selected>Selecione um cliente</option>
                        @foreach ($client as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full" for="whatsapp">Procedimento</label>
                    <select name="procedure[]" class="border-[2px] p-1 w-4/12 outline-none" multiple aria-label="Default select example">
                        <option selected>Selecione um procedimento</option>
                        @foreach ($procedure as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full" for="whatsapp">Data</label>
                    <input name="date" type="date" class="border-[2px] p-1 w-4/12 outline-none" id="qtd_session">
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full"  for="whatsapp">Início</label>
                    <input name="start" type="time" class="border-[2px] p-1 w-4/12 outline-none" id="days_return">
                </div>
                <div class="flex flex-wrap">
                    <label class="w-full"  for="whatsapp">Fim</label>
                    <input name="end" type="time" class="border-[2px] p-1 w-4/12 outline-none" id="days_return">
                </div>
                <div>
                    <button type="submit" class="bg-background-kelem py-1 px-8 text-white w-4/12 outline-none" style="background: #054141">Salvar</button>
                </div>
                </form>
            </div>
    </section>
@endsection
