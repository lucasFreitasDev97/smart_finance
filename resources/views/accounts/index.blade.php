@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Minhas Contas</h1>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accountModal">
            <i class="bi bi-plus-circle-fill"></i> Nova Conta
        </button>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Saldo Atual</th>
                        <th scope="col" class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @forelse ($accounts as $account) --}}
                    <tr>
                        <td>Conta Corrente (Exemplo)</td>
                        <td class="fw-bold">R$ 1.500,00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil-fill"></i> Editar</button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Carteira (Exemplo)</td>
                        <td class="fw-bold">R$ 150,00</td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil-fill"></i> Editar</button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
                        </td>
                    </tr>
                    {{-- @empty --}}
                    {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="accountModalLabel">Nova Conta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{-- route('accounts.store') --}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome da Conta</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Conta Corrente, Carteira" required>
                        </div>
                        <div class="mb-3">
                            <label for="balance" class="form-label">Saldo Inicial</label>
                            <input type="number" class="form-control" id="balance" name="balance" step="0.01" value="0.00" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar Conta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
