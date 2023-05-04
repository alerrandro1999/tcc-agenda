<title>Kelem Borges - Calendario</title>
@extends('dashboard')
@section('dashboard')
    <div class="col-lg-12 p-3 d-flex gap-4 flex-wrap">
        <div class="col-lg-12">
            <a href="{{ route('calendar.newService') }}" class="btn btn-icon btn-3 btn-primary" type="button">
                <span class="btn-inner--icon"><i class="ni ni-money-coins text-light opacity-10"></i></span>
                <span class="btn-inner--text">Novo Atendimento</span>
            </a>
        </div>
        @foreach ($data as $item)
            <div class="form-horizontal">
                @method('PUT')
                @csrf
                <div class="col-lg-12">
                    <div class="bg-white d-flex justify-content-center align-items-center gap-3 p-3">
                        <div class="rounded-circle background-top-banner d-flex justify-content-center align-items-center text-white"
                            style="width: 50px; height: 50px">
                            {{ \Carbon\Carbon::parse($item->date)->format('d') }}
                        </div>
                        <div class="d-flex flex-column">
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
                            <span><a href="https://api.whatsapp.com/send?phone=+55{{$item->whatsapp}}&text=olá tudo bem?" target="_blank">Entrar em contato</a></span>
                        </div>
                        <div class="d-flex gap-3 flex-column">
                            <form action="{{ route('calendar.done') }}" method="post">
                                @method('PUT')
                                @csrf
                                <input type="hidden" id="status" name="status" placeholder="" class="form-control"
                                    value="1">
                                <input type="hidden" id="id" name="id" placeholder="" class="form-control"
                                    value="{{ $item->id }}">
                                <button type="submit" class="form-control border-0"><i
                                        class="ni ni-like-2 fs-2 text-success" ></i></button>
                            </form>

                            <a href="{{ route('calendar.canceled', ['id' => $item->id]) }}" type="button" id="id"
                                name="id" class="form-control border-0" value="{{ $item->id }}" ><i
                                    class="ni ni-like-2 fs-2 text-danger rotate-180"></i></a>

                        </div>
                    </div>
                    <div
                        class="text-center text-white  
                            @if ($item->status == '') Aguardando
                            @elseif ($item->status == 1)
                                bg-success
                            @else
                                bg-danger @endif">
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
            </div>
        @endforeach

    </div>
@endsection
