<title>Kelem Borges - Procedimentos</title>

@extends('dashboard')
@section('dashboard')
    <div class="p-3">
        <div class="mb-3">
            <div>
                <a href="{{ route('procedure.newProcedure') }}" class=" p-3 rounded flex w-52 gap-3" type="button"
                    style="background: #054141">
                    <span class="text-white">Novo Procedimento</span>
                    <span class=""><i class="ph ph-plus text-white text-xl"></i></span>
                </a>
            </div>
        </div>
        <div class="">
            <table class="w-full text-sm text-left text-black dark:text-gray-400">
                <thead class="text-xs text-white uppercase dark:bg-gray-700 dark:text-gray-400 " style="background: #054141">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nome</th>
                        <th scope="col" class="px-6 py-3">Preço</th>
                        <th scope="col" class="px-6 py-3">Quantidade
                            de Sessão
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dias para retorno</th>
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
                                    <div class="">
                                        <h6 class="">{{ $client->name }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="">
                                    <div class="">
                                        <h6 class="">R$ {{ $client->price }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="">
                                    <div class="">
                                        <h6 class="">{{ $client->qtd_session }}
                                        </h6>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="">
                                    <div class="">
                                        <h6 class="">{{ $client->days_return }}
                                        </h6>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('procedure.updateCheck', ['id' => $client->id]) }}" type="button"
                                    class="bg-blue-500 px-2 py-2 text-white font-bold"><i class="fa fa-edit (alias)"></i>&nbsp;
                                    Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('procedure.delete', ['id' => $client->id]) }}" type="button"
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
@endsection
