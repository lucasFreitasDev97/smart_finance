<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.editAccountBtn');
        const editForm = document.getElementById('editAccountForm');
        const nameInput = document.getElementById('editName');
        const balanceInput = document.getElementById('editBalance');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const accountId = this.getAttribute('data-id');
                const accountName = this.getAttribute('data-name');
                const accountBalance = this.getAttribute('data-balance');

                nameInput.value = accountName;
                balanceInput.value = accountBalance;

                editForm.action = `/accounts/update/${accountId}`;
            });
        });
    });
</script>

