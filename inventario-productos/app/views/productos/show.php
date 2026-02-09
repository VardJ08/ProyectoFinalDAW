<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>Detalle del Producto</h1>

    <p><strong>Nombre:</strong> <?= htmlspecialchars($producto['nombre']) ?></p>
    <p><strong>Descripción:</strong> <?= htmlspecialchars($producto['descripcion']) ?></p>
    <p><strong>Precio:</strong> $<?= $producto['precio'] ?></p>
    <p><strong>Stock:</strong> <?= $producto['stock'] ?></p>
    <p><strong>Creado:</strong> <?= $producto['created_at'] ?></p>

    <br>
    <a href="index.php?controller=producto&action=index">Volver al listado</a>

</div>
</body>
</html>
