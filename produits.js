<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-product');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const productId = this.getAttribute('data-id');

            if (confirm("Voulez-vous vraiment supprimer ce produit ?")) {
                // Envoi d'une requête AJAX pour supprimer le produit
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'supprimer_produit.php');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Actualiser la page après la suppression
                        window.location.reload();
                    } else {
                        console.error('Erreur lors de la suppression du produit');
                    }
                };
                xhr.send(id=${productId});
            }
        });
    });
});
</script>
