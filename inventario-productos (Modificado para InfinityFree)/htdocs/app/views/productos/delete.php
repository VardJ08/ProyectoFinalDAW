<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Eliminar Producto</title>
</head>
<body>
<div class="container">

<h1>¿Desea eliminar este producto?</h1>

<a href="index.php?controller=producto&action=delete&id=<?= $id ?>&confirm=yes">
    Sí, eliminar
</a>
<br><br>
<a href="index.php?controller=producto&action=index">
    Cancelar
</a>
</div>
</body>
</html>
