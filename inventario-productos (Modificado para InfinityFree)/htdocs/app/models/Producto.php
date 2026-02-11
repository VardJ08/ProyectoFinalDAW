<?php
require_once 'app/config/database.php';
class Producto {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM productos");
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($data) {
        $stmt = $this->db->prepare(
            "INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (?, ?, ?, ?)"
        );
        $stmt->bind_param(
            "ssdi",
            $data['nombre'],
            $data['descripcion'],
            $data['precio'],
            $data['stock']
        );
        return $stmt->execute();
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare(
            "UPDATE productos SET nombre=?, descripcion=?, precio=?, stock=? WHERE id=?"
    );
    $stmt->bind_param(
        "ssdii",
        $data['nombre'],
        $data['descripcion'],
        $data['precio'],
        $data['stock'],
        $id
       );
    return $stmt->execute();
}

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM productos WHERE id=?");
        $stmt->bind_param("i", $id);
    return $stmt->execute();
}

}
