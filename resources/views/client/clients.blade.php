<title>Kelem Borges - Clientes</title>
@extends('dashboard')
@section('dashboard')
    <div class="p-3">
        <div class="mb-3">
            <div>
                <a href="{{ route('client.newClient') }}" class="p-3 rounded flex w-40 gap-3" type="button"
                    style="background: #054141">
                    <span class="text-white">Novo cliente</span>
                    <span class=""><i class="ph ph-plus text-white text-xl"></i></span>
                </a>
            </div>
        </div>
        <div class="">
            <div class="table-responsive">
                <table class="w-full text-sm text-left text-black dark:text-gray-400">
                    <thead class="text-xs text-white uppercase dark:bg-gray-700 dark:text-gray-400 " style="background: #054141">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nome</th>
                            <th scope="col" class="px-6 py-3">Idade</th>
                            <th scope="col" class="px-6 py-3">Telefone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ultima Sessão</th>
                            <th scope="col" class="px-6 py-3">
                                Editar</th>
                            <th scope="col" class="px-6 py-3">Excluir</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $client)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    <div class="">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $client->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $client->age }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-xs font-weight-bold mb-0"><a href="">{{ $client->whatsapp }}</a>
                                    </p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-xs font-weight-bold mb-0"><a href="">00/00/00</a>
                                    </p>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('client.updateCheck', ['id' => $client->id]) }}" type="button"
                                        class="bg-blue-500 px-2 py-2 text-white font-bold"><i class="fa fa-edit (alias)"></i>&nbsp;
                                        Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('client.delete', ['id' => $client->id]) }}" type="button"
                                        class="bg-red-500 px-2 py-2 text-white font-bold"><i class="fa fa-regular fa-trash"></i>&nbsp;
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
