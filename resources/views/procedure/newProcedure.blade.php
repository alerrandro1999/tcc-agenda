<title>Kelem Borges - Novo Procedimentos</title>
@extends('dashboard')
@section('dashboard')
    <section class="p-3">
        @if (isset($data))
            <form action="{{ route('procedure.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @method('PUT')
            @else
                <form action="{{ route('procedure.save') }}" method="post" class="form-horizontal"
                    enctype="multipart/form-data">
        @endif
        @csrf
        <input type="hidden" id="id" name="id" placeholder="" value="{{ isset($data->id) ? $data->id : '' }}">
        <div class="flex flex-col gap-5">
            <div class="title w-full text-5xl">
                <h1>Novo Procedimento</h1>
            </div>
            <div class="flex flex-wrap">
                <label class="w-full" for="name">Nome</label>
                <input name="name" type="text" class="border-[2px] p-1 w-4/12 outline-none" id="name"
                    placeholder="Nome Do procedimento" value="{{ isset($data->name) ? $data->name : '' }}">
            </div>
            <div class="flex flex-wrap">
                <label class="w-full" for="whatsapp">Preço</label>
                <input name="price" type="text" class="border-[2px] p-1 w-4/12 outline-none" id="price"
                    placeholder="Preço do procedimento" value="{{ isset($data->price) ? $data->price : '' }}">
            </div>
            <div class="flex flex-wrap">
                <label class="w-full" for="whatsapp">Quantidade de Sessão</label>
                <input name="qtd_session" type="text" class="border-[2px] p-1 w-4/12 outline-none" id="qtd_session"
                    placeholder="Quantidade de sessões" value="{{ isset($data->qtd_session) ? $data->qtd_session : '' }}">
            </div>
            <div class="flex flex-wrap">
                <label class="w-full" for="whatsapp">Dias para retorno</label>
                <input name="days_return" type="text" class="border-[2px] p-1 w-4/12 outline-none" id="days_return"
                    placeholder="Dias para retorno" value="{{ isset($data->days_return) ? $data->days_return : '' }}">
            </div>
            <div class="flex flex-wrap">
                <button type="submit" class="py-1 px-8 text-white w-4/12 outline-none" style="background: #054141">Salvar</button>
            </div>
            </form>
        </div>
    </section>
@endsection
