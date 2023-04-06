@extends('dashboard')
@section('dashboard')
    <div class="col-lg-12 m-3">
        <a href="{{ route('procedure.newProcedure') }}" class="btn btn-icon btn-3 btn-primary" type="button">
            <span class="btn-inner--icon"><i class="ni ni-single-02 text-light opacity-10"></i></span>
            <span class="btn-inner--text">Novo Procedimento</span>
        </a>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantidade
                                de Sessão
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Dias para retorno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $client)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $client->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $client->price }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $client->qtd_session }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $client->days_return }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
