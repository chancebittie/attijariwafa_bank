document.querySelector("form").addEventListener("submit", function(event) {
    let amount = document.querySelector("#amount").value;
    if (amount <= 0) {
        alert("Le montant doit être supérieur à zéro.");
        event.preventDefault();
    }
});
