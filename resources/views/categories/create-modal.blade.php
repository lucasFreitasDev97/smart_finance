<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Nova Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('categories.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome da Categoria</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Salário, Supermercado, Lazer" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="expense">Entrada</option>
                            <option value="income">Saída</option>
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
