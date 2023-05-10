@extends('dashboard')
@section('dashboard')
    <div class="d-flex justify-content-start gap-4 flex-wrap m-3">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Clientes</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $data['client'] }}
                                    </h5>
                                    <p class="mb-0">
                                        {{-- <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Procedimentos</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $data['procedure'] }}
                                    </h5>
                                    <p class="mb-0">
                                        {{-- <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-bullet-list-67  text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Caixa</p>
                                    <h5 class="font-weight-bolder">
                                        R$ {{ $data['price'] }}
                                    </h5>
                                    <p class="mb-0">
                                        {{-- <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins  text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Feito</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $data['done'] }}
                                    </h5>
                                    <p class="mb-0">
                                        {{-- <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-check-bold  text-lg opacity-10" aria-hidden="true"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Aguardando</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $data['waiting'] }}
                                    </h5>
                                    <p class="mb-0">
                                        {{-- <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins  text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Cancelado</p>
                                    <h5 class="font-weight-bolder">
                                    {{ $data['canceled'] }}
                                    </h5>
                                    <p class="mb-0">
                                        {{-- <span class="text-success text-sm font-weight-bolder">+55%</span>
                                        since yesterday --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins  text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
