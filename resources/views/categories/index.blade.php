@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Minhas Categorias</h1>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
            <i class="bi bi-plus-circle-fill"></i> Nova Categoria
        </button>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col" class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @forelse ($categories as $category) --}}
                    <tr>
                        <td>Salário</td>
                        <td><span class="badge bg-success">Receita</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil-fill"></i> Editar</button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Alimentação</td>
                        <td><span class="badge bg-danger">Despesa</span></td>
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

    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Nova Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{-- route('categories.store') --}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome da Categoria</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Salário, Supermercado, Lazer" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="expense">Despesa</option>
                                <option value="income">Receita</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar Categoria</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
