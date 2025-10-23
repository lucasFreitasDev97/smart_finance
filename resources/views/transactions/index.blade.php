@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Minhas Transações</h1>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#transactionModal">
            <i class="bi bi-plus-circle-fill"></i> Nova Transação
        </button>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label for="filter_date_start" class="form-label">De:</label>
                    <input type="date" class="form-control" id="filter_date_start" name="filter_date_start">
                </div>
                <div class="col-md-3">
                    <label for="filter_date_end" class="form-label">Até:</label>
                    <input type="date" class="form-control" id="filter_date_end" name="filter_date_end">
                </div>
                <div class="col-md-4">
                    <label for="filter_category" class="form-label">Categoria:</label>
                    <select class="form-select" id="filter_category" name="filter_category">
                        <option value="">Todas</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Filtrar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Conta</th>
                        <th scope="col" class="text-end">Valor</th>
                        <th scope="col" class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @forelse ($transactions as $transaction) --}}
                    <tr>
                        <td>20/10/2025</td>
                        <td>Almoço no restaurante</td>
                        <td>Alimentação</td>
                        <td>Conta Corrente</td>
                        <td class="text-end text-danger fw-bold">- R$ 45,00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>15/10/2025</td>
                        <td>Pagamento Salário</td>
                        <td>Salário</td>
                        <td>Conta Corrente</td>
                        <td class="text-end text-success fw-bold">+ R$ 3.500,00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                    {{-- @empty --}}
                    {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="transactionModal" tabindex="-1" aria-labelledby="transactionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transactionModalLabel">Nova Transação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{-- route('transactions.store') --}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="description" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="amount" class="form-label">Valor (R$)</label>
                                <input type="number" class="form-control" id="amount" name="amount" step="0.01" required placeholder="0,00">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="date" class="form-label">Data</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ date('Y-m-d') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="account_id" class="form-label">Conta</label>
                                <select class="form-select" id="account_id" name="account_id" required>
                                    <option value="">Selecione uma conta</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="category_id" class="form-label">Categoria</label>
                                <select class="form-select" id="category_id" name="category_id" required>
                                    <option value="">Selecione uma categoria</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar Transação</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
