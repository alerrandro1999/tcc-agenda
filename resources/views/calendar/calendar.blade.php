<title>Kelem Borges - Calendario</title>
@extends('dashboard')
@section('dashboard')
    <div class="flex p-3 gap-7 flex-wrap">
        <div class="w-full">
            <div>
                <a href="{{ route('calendar.newService') }}" class=" p-3 rounded flex w-48 gap-3" type="button" style="background: #054141">
                    <span class="text-white">Novo Atendimento</span>
                    <span class=""><i class="ph ph-plus text-white text-xl"></i></span>
                </a>
            </div>
        </div>
        @foreach ($data as $item)
            @method('PUT')
            @csrf
            <div class="w-[300px] h-auto bg-background-kelem text-white rounded ">
                <div class="flex justify-center items-center gap-7 p-3">
                    <div class="rounded flex justify-center text-4xl">
                        {{ \Carbon\Carbon::parse($item->date)->format('d') }}
                    </div>
                    <div class="flex flex-col">
                        @php
                            $procedures = explode(',', $item->procedure);
                            $price = explode(',', $item->price);
                            
                            $nameAndOPrice = array_combine($procedures, $price);
                        @endphp
                        <span>{{ $item->client }}</span>
                        @foreach ($nameAndOPrice as $procedure => $price)
                            <span>{{ $procedure }} - R$: {{ $price }}</span>
                        @endforeach

                        <span>{{ $item->time }}</span>
                        <span><a href="https://api.whatsapp.com/send?phone=+55{{ $item->whatsapp }}&text=olá tudo bem?"
                                target="_blank">Entrar em contato</a></span>
                    </div>
                    <div class="flex gap-3 flex-col">
                        <form action="{{ route('calendar.done') }}" method="post">
                            @method('PUT')
                            @csrf
                            <input type="hidden" id="status" name="status" placeholder="" class="form-control"
                                value="1">
                            <input type="hidden" id="id" name="id" placeholder="" class="form-control"
                                value="{{ $item->id }}">
                            <button type="submit" class="form-control border-0"><i
                                    class="ph ph-thumbs-up text-4xl text-green-500"></i></button>
                        </form>

                        <a href="{{ route('calendar.canceled', ['id' => $item->id]) }}" type="button" id="id"
                            name="id" class="form-control border-0" value="{{ $item->id }}"><i
                                class="ph ph-thumbs-down text-4xl text-red-500"></i></a>

                    </div>
                </div>
                <div
                    class="text-center text-white   
                            @if ($item->status == '') Aguardando
                            @elseif ($item->status == 1)
                                bg-green-500
                            @else
                                bg-red-500 @endif">
                    <span>
                        @if ($item->status == '')
                            Aguardando
                        @elseif ($item->status == 1)
                            Feito
                        @else
                            Cancelado
                        @endif
                    </span>
                </div>
            </div>
        @endforeach

    </div>
@endsection
