function validarFormulario() {
    const form = document.querySelector("form");
    const required = form.querySelectorAll("input[required], select[required]");
    const boton = document.getElementById("botonRegistro");
    let completo = true;

    required.forEach(el => {
        if (!el.value.trim()) completo = false;
    });

    if (completo) {
        boton.disabled = false;
        boton.classList.add("activo");
    } else {
        boton.disabled = true;
        boton.classList.remove("activo");
    }
}
