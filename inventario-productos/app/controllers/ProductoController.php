<?php

require_once '../app/models/Producto.php';

class ProductoController {
   private $model;

    public function __construct() {
        $this->model = new Producto();
    }

    public function index() {
        $producto = new Producto();
        $productos = $producto->getAll();
        require '../app/views/productos/index.php';
    }

    public function create() {
        require '../app/views/productos/create.php';
    }

    public function store() {
        // Validaciones backend mínimas
        if (
            empty($_POST['nombre']) ||
            strlen($_POST['nombre']) < 3 ||
            $_POST['precio'] <= 0 ||
            $_POST['stock'] < 0
        ) {
            $error = "Datos inválidos. Verifique el formulario.";
            require '../app/views/productos/create.php';
            return;
        }

        $producto = new Producto();
        $producto->create($_POST);

        header("Location: index.php?controller=producto&action=index");
    }

public function edit() {
    $producto = new Producto();
    $data = $producto->getById($_GET['id']);
    require '../app/views/productos/edit.php';
}

public function update() {
    if (
        empty($_POST['nombre']) ||
        strlen($_POST['nombre']) < 3 ||
        $_POST['precio'] <= 0 ||
        $_POST['stock'] < 0
    ) {
        $error = "Datos inválidos";
        $producto = new Producto();
        $data = $producto->getById($_GET['id']);
        require '../app/views/productos/edit.php';
        return;
    }

    $producto = new Producto();
    $producto->update($_GET['id'], $_POST);

    header("Location: index.php?controller=producto&action=index");
}

public function delete() {
    if (!isset($_GET['confirm'])) {
        $id = $_GET['id'];
        require '../app/views/productos/delete.php';
        return;
    }

    $producto = new Producto();
    $producto->delete($_GET['id']);

    header("Location: index.php?controller=producto&action=index");
}
public function show() {
    $id = $_GET['id'];
    $producto = $this->model->getById($id);
    require_once '../app/views/productos/show.php';
}

}
