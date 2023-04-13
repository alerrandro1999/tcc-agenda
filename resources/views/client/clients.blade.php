<title>Kelem Borges - Clientes</title>
@extends('dashboard')
@section('dashboard')
    <div class="col-lg-9 m-3">
        <a href="{{ route('client.newClient') }}" class="btn btn-icon btn-3 btn-primary" type="button">
            <span class="btn-inner--icon"><i class="ni ni-single-02 text-light opacity-10"></i></span>
            <span class="btn-inner--text">Nova Cliente</span>
        </a>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Idade</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefone
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Ultima Sessão</th>
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
                                            <h6 class="mb-0 text-xs">{{ $client->age }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><a href="">{{ $client->whatsapp }}</a>
                                    </p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><a href="">00/00/00</a>
                                    </p>
                                </td>
                                <td>
                                    <a href="{{ route('client.updateCheck', ['id' => $client->id]) }}" type="button"
                                        class="btn btn-primary mb-3"><i class="fa fa-edit (alias)"></i>&nbsp;
                                        Editar</a>
                                </td>
                                <td>
                                    <a href="{{ route('client.delete', ['id' => $client->id]) }}" type="button"
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
