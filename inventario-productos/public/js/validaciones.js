function validarFormulario() {
    let nombre = document.getElementById("nombre").value;
    let precio = document.getElementById("precio").value;
    let stock = document.getElementById("stock").value;

    if (nombre.length < 3) {
        alert("El nombre debe tener al menos 3 caracteres");
        return false;
    }

    if (precio <= 0) {
        alert("El precio debe ser mayor que 0");
        return false;
    }

    if (stock < 0) {
        alert("El stock no puede ser negativo");
        return false;
    }

    return true;
}
