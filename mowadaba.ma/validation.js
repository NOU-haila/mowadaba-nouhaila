document.addEventListener('DOMContentLoaded', function() {
  
    M.AutoInit();

    const form = document.getElementById('inscriptionForm');

    form.addEventListener('submit', function(event) {
        
        if (!validationReussie) {
            event.preventDefault();
        }
    });
});
