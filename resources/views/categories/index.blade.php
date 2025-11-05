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
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td><span class="badge bg-success">
                                    {{ $category->type === 'income' ? 'Entrada' : 'Saída' }}
                                </span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil-fill"></i> Editar</button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash-fill"></i> Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('categories.create-modal')
@endsection
