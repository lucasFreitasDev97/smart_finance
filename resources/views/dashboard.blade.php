@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Dashboard</h1>
            <p class="fs-5">Olá, {{ Auth::user()->name }}! Bem-vindo de volta.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="card-title">Saldo Total</h5>
                    <p class="card-text fs-3 fw-bold">R$ 1.234,56</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="card-title">Receitas (Mês)</h5>
                    <p class="card-text fs-3 fw-bold">R$ 3.500,00</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="card-title">Despesas (Mês)</h5>
                    <p class="card-text fs-3 fw-bold">R$ 2.265,44</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Últimas Transações</h5>
                </div>
                <div class="card-body">
                    <p>Aqui você pode listar as últimas 5-10 transações.</p>
                    <a href="" class="btn btn-primary">Ver Todas as Transações</a>
                    <a href="" class="btn btn-success">
                        <i class="bi bi-plus-circle-fill"></i> Nova Transação
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
