document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector(".contactodev form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch(this.getAttribute("action"), {
            method: "POST",
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                alert(data.message);
                form.reset();
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Ha ocurrido un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.");
        });
    });
});
