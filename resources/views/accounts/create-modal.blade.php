<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountModalLabel">Nova Conta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('accounts.store')}}" method="POST">
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
