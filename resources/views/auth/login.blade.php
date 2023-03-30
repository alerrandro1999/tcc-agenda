@extends('welcome')
@section('content')
    <section class="background-container">
        <div class="container-login">
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
                    <div class="container-error">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-text text-light ">{{session('invalido')}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            </form>

        </div>
    </section>
@endsection
