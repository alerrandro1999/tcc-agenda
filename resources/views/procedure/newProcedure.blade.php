@extends('dashboard')
@section('dashboard')
    <div class="col-lg-6 m-3 p-3 bg-white">
        <form action="{{ route('procedure.save') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Nome Do procedimento">
            </div>
            <div class="form-group">
                <label for="whatsapp">Preço</label>
                <input name="price" type="text" class="form-control" id="age" placeholder="Preço do procedimento">
            </div>
            <div class="form-group">
                <label for="whatsapp">Quantidade de Sessão</label>
                <input name="qtd_session" type="text" class="form-control" id="whatsapp" placeholder="Quantidade de sessões">
            </div>
            <div class="form-group">
                <label for="whatsapp">Dias para retorno</label>
                <input name="days_return" type="text" class="form-control" id="whatsapp" placeholder="Dias para retorno">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection
