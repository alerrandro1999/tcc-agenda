@extends('dashboard')
@section('dashboard')
    <div class="flex p-3 gap-7 flex-wrap">
        <div class="title w-full text-5xl">
            <h1>Dashboard</h1>
        </div>
        <div class="flex justify-between items-center w-64 bg-background-kelem-linear p-3 text-white rounded">
            <div class="col-8">
                <p class="text-lg ">Caixa</p>
                <h5 class="text-xl font-bold ">
                    R$ {{ $data['price'] }}
                </h5>
            </div>
            <div class="text-4xl rounded-full text-black bg-white p-2">
                <i class="ph ph-chart-bar"></i>
            </div>
        </div>
        <div class="flex justify-between items-center w-64 bg-background-kelem-linear p-3 text-white rounded">
            <div class="col-8">
                <p class="text-lg ">Clientes</p>
                <h5 class="text-xl font-bold ">
                    {{ $data['client'] }}
                </h5>
            </div>
            <div class="text-4xl rounded-full text-black bg-white p-2">
                <i class="ph ph-chart-bar"></i>
            </div>
        </div>
        <div class="flex justify-between items-center w-64 bg-background-kelem-linear p-3 text-white rounded">
            <div class="col-8">
                <p class="text-lg ">Procedimentos</p>
                <h5 class="text-xl font-bold ">
                    {{ $data['procedure'] }}
                </h5>
            </div>
            <div class="text-4xl rounded-full text-black bg-white p-2">
                <i class="ph ph-chart-bar"></i>
            </div>
        </div>
        <div class="title w-full text-2xl">
            <h2>Status dos procedimentos</h1>
        </div>
        <div class="flex justify-between items-center w-64 bg-background-kelem-linear p-3 text-white rounded">
            <div class="col-8">
                <p class="text-lg ">Concluídos</p>
                <h5 class="text-xl font-bold ">
                    {{ $data['done'] }}
                </h5>
            </div>
            <div class="text-4xl rounded-full text-black bg-white p-2">
                <i class="ph ph-chart-bar"></i>
            </div>
        </div>

        <div class="flex justify-between items-center w-64 bg-background-kelem-linear p-3 text-white rounded">
            <div class="col-8">
                <p class="text-lg ">Aguardando</p>
                <h5 class="text-xl font-bold ">
                    {{ $data['waiting'] }}
                </h5>
            </div>
            <div class="text-4xl rounded-full text-black bg-white p-2">
                <i class="ph ph-chart-bar"></i>
            </div>
        </div>
        <div class="flex justify-between items-center w-64 bg-background-kelem-linear p-3 text-white rounded">
            <div class="col-8">
                <p class="text-lg ">Cancelados</p>
                <h5 class="text-xl font-bold ">
                    {{ $data['canceled'] }}
                </h5>
            </div>
            <div class="text-4xl rounded-full text-black bg-white p-2">
                <i class="ph ph-chart-bar"></i>
            </div>
        </div>
    </div>
@endsection
