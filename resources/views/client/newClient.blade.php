@extends('dashboard')
@section('dashboard')
    <div class="col-lg-6 m-3">
        <form action="{{route('client.save')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Novo Cliente</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Nome Do cliente">
            </div>
            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input name="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="WhatsApp do cliente">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection
