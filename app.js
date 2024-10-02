document.addEventListener('DOMContentLoaded', dati);

function dati() {

    const form = document.getElementById('data');
    const submitBtn = document.getElementById('button[type="submitResult"]');

    submitBtn.addEventListener('click', function(event) {
        event.preventDefault();
        const name = document.getElementById('first_name').value;
        const email = document.getElementById('email').value;
        const curse = document.getElementById('curse').value;

        const results = document.getElementById('result');
        results.innerHTML = `<p>Vārds: ${name}<br>
                            E-pasts: ${email}<br>
                            Kursa līmenis: ${curse}</p>`; 
    });
}
