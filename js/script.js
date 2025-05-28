document.addEventListener("DOMContentLoaded", function(){
    const form = document.getElementById("registration-form");
    const status = document.getElementById("form-status");

    form.addEventListener("submit", function(e){
        e.preventDefault();
        status.textContent = "Vielen Dank für Ihre Registrierung Wir melden uns bald bei Ihnen. ";
        form.reset();
    });
});