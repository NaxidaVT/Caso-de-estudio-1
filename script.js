document.addEventListener("DOMContentLoaded", function() {
    // Validación en tiempo real del formulario de contacto
    const nombre = document.getElementById("nombre");
    const correo = document.getElementById("correo");
    const mensaje = document.getElementById("mensaje");

    //nombre.addEventListener("input", validateNombre);
    //correo.addEventListener("input", validateCorreo);
    //mensaje.addEventListener("input", validateMensaje);

    function validateNombre() {
        if (nombre.value.trim() === "") {
            nombre.style.borderColor = "red";
        } else {
            nombre.style.borderColor = "green";
        }
    }

    function validateCorreo() {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(correo.value)) {
            correo.style.borderColor = "red";
        } else {
            correo.style.borderColor = "green";
        }
    }

    function validateMensaje() {
        if (mensaje.value.trim() === "") {
            mensaje.style.borderColor = "red";
        } else {
            mensaje.style.borderColor = "green";
        }
    }

    // Cambiar el color de fondo al hacer clic en el botón
    const changeColorButton = document.getElementById("changeColorButton");

    changeColorButton.addEventListener("click", function() {
        document.body.style.backgroundColor = getRandomColor();
    });

    function getRandomColor() {
        const letters = "0123456789ABCDEF";
        let color = "#";
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
});
