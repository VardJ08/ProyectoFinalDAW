<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Productos</title>
</head>
<body>
<div class="container">
<h1>Inventario de Tienda CCTV</h1>
<h3>Productos en Stock de la Tienda</h3>
<a href="index.php?controller=producto&action=create">Crear producto</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    <?php while ($row = $productos->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['precio'] ?></td>
            <td><?= $row['stock'] ?></td>
	<td>
            <a href="index.php?controller=producto&action=show&id=<?= $row['id'] ?>">Ver</a> |
    	    <a href="index.php?controller=producto&action=edit&id=<?= $row['id'] ?>">Editar</a> |
     	    <a href="index.php?controller=producto&action=delete&id=<?= $row['id'] ?>">Eliminar</a>
	</td>

        </tr>
    <?php endwhile; ?>

</table>
</div>
</body>
</html>
