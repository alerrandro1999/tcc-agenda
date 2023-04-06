@extends('dashboard')
@section('dashboard')
    <div class="col-lg-6 m-3 p-3 bg-white">
        <form action="{{route('client.save')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Novo Cliente</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Nome Do cliente">
            </div>
            <div class="form-group">
                <label for="whatsapp">Idade</label>
                <input name="age" type="number" class="form-control" id="age" placeholder="Idade do cliente">
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
