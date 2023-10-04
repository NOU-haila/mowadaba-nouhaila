document.addEventListener('DOMContentLoaded', function() {
    // Initialisation de Materialize
    M.AutoInit();

    // Validation du formulaire
    const form = document.getElementById('inscriptionForm');

    form.addEventListener('submit', function(event) {
        // Valider les champs ici (par exemple, vérifier que l'e-mail est valide, etc.)

        // Si la validation échoue, empêcher la soumission du formulaire
        if (!validationReussie) {
            event.preventDefault();
        }
    });
});
