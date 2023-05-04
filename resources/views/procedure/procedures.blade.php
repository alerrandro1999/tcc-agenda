<title>Kelem Borges - Procedimentos</title>

@extends('dashboard')
@section('dashboard')
    <div class="col-lg-9 m-3">
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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Editar</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Excluir</th>
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
                                            <h6 class="mb-0 text-xs">R$ {{ $client->price }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $client->qtd_session }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $client->days_return }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('procedure.updateCheck', ['id' => $client->id]) }}" type="button"
                                        class="btn btn-primary mb-3"><i class="fa fa-edit (alias)"></i>&nbsp;
                                        Editar</a>
                                </td>
                                <td>
                                    <a href="{{ route('procedure.delete', ['id' => $client->id]) }}" type="button"
                                        class="btn btn-danger mb-3"><i class="fa fa-regular fa-trash"></i>&nbsp;
                                        Excluir</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
