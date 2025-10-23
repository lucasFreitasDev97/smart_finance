@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">
                    <i class="bi bi-piggy-bank-fill text-primary"></i>
                    Bem-vindo ao seu App de Finanças
                </h1>
                <p class="fs-4 col-md-8 mx-auto">
                    Assuma o controle total da sua vida financeira. Gerencie suas contas, categorias e transações de forma simples e intuitiva.
                </p>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-2">Comece Agora (Registrar)</a>
                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg">Já tenho conta (Login)</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-graph-up-arrow fs-1 text-success"></i>
                        <h3 class="card-title mt-3">Visualize suas Transações</h3>
                        <p class="card-text">Veja para onde seu dinheiro está indo com relatórios claros.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-wallet2 fs-1 text-info"></i>
                        <h3 class="card-title mt-3">Múltiplas Contas</h3>
                        <p class="card-text">Gerencie sua conta corrente, poupança e cartões de crédito em um só lugar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <i class="bi bi-tags-fill fs-1 text-warning"></i>
                        <h3 class="card-title mt-3">Categorias Flexíveis</h3>
                        <p class="card-text">Crie categorias de receita e despesa que fazem sentido para você.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
