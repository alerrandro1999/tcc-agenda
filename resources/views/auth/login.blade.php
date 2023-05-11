@extends('welcome')
@section('content')
    <section class="w-full h-screen flex justify-center items-center bg-background-kelem">
        <div class="bg-white flex justify-center max-w-[90%] min-w-[20%] py-12 px-7">
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="image">
                    <img src="assets/image/logo.svg" alt="logo" srcset="" width="150" height="150">
                </div>
                <div class="email">
                    <input id="email" type="email" name="email" id="" placeholder="Email"
                        value="alerrandrokaton@gmail.com">
                </div>
                <div class="password">
                    <input id="password" type="password" name="password" id="" placeholder="Senha" value="123456">
                </div>
                <div class="submit">
                    <input id="submit" type="submit" value="Entrar">
                </div>
                @if (session('invalido'))
                    <div class="bg-red-500 text-white px-2 py-2 relative" role="alert">
                        <strong class="font-bold text-sm">Atenção!</strong>
                        <span class="block sm:inline text-sm">{{ session('invalido') }}</span>
                        <button class="absolute top-0 right-0 px-2 py-2"
                            onclick="event.preventDefault(); this.parentElement.style.display='none'">
                            <i class="ph ph-x"></i>

                        </button>

                    </div>
                @endif
            </form>

        </div>
    </section>
@endsection
