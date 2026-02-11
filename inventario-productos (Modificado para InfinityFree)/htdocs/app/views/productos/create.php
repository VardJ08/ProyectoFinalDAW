<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>Crear Producto</h1>

    <?php if (!empty($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST"
          action="index.php?controller=producto&action=store"
          onsubmit="return validarFormulario()">

        <label>Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion"></textarea><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" id="precio" name="precio" required><br><br>

        <label>Stock:</label><br>
        <input type="number" id="stock" name="stock" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php?controller=producto&action=index">Volver al listado</a>

</div>

<!-- JavaScript de validaciones -->
<script src="js/validaciones.js"></script>

</body>
</html>
