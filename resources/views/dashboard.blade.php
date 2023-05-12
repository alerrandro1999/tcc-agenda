@extends('welcome')
@section('content')
    <div class="flex justify-start">
        <section class="w-1/4">
            <span class="text-white text-4xl top-5 left-4 cursor-pointer" onclick="openSidebar()">
                <i class="ph ph-list px-2 bg-gray-900 rounded-md"></i>
            </span>
            <div
                class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[250px] overflow-y-auto text-center bg-background-kelem">
                <div class="text-gray-100 text-xl">
                    <div class="p-2.5 mt-1 flex items-center">
                        <h1 class="font-bold text-gray-200 text-[15px] ml-3">Kelem Borges</h1>
                        <i class="ph ph-x cursor-pointer ml-28 lg:hidden" onclick="openSidebar()"></i>
                    </div>
                </div>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:border-x-green-200  text-white">
                    <i class="ph ph-list"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold"><a href="{{ route('dashboard') }}">Dashboard</a></span>
                </div>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:border-x-green-200 text-white">
                    <i class="ph ph-calendar"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold"><a href="{{ route('calendar.calendar') }}">Calendario</a></span>
                </div>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:border-x-green-200 text-white">
                    <i class="ph ph-list-dashes"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold"><a href="{{ route('procedure.procedures') }}">Procedimentos</a></span>
                </div>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:border-x-green-200 text-white">
                    <i class="ph ph-users"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold"><a href="{{ route('client.clients') }}">Clientes</a></span>
                </div>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:border-x-green-200 text-white">
                    <i class="ph ph-sign-out"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold"><a href="{{ route('signout') }}">Sair</a></span>
                </div>
            </div>
        </section>

        <main class="w-3/4">
            @yield('dashboard')
        </main>
    </div>
@endsection
