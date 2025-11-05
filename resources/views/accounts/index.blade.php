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

                    @foreach($accounts as $account)
                        <tr>
                            <td>{{$account->name}}</td>
                            <td class="fw-bold">R$ {{ number_format($account->balance, 2, ',', '.') }}</td>
                            <td class="text-end">
                                <button
                                    class="btn btn-sm btn-outline-primary me-1 editAccountBtn"
                                    data-id="{{ $account->id }}"
                                    data-name="{{ $account->name }}"
                                    data-balance="{{ $account->balance }}"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editAccountModal"
                                >
                                    <i class="bi bi-pencil-fill"></i> Editar
                                </button>

                                <a href="{{{route('accounts.destroy', ['account' => $account->getKey()])}}}">
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('accounts.create-modal')
    @include('accounts.edit-modal')
    @include('accounts.scripts')
@endsection
