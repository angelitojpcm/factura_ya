<?php
class Facturacion {
    private $model;

    public function __construct() {
        $this->model = new Factura();
    }

    public function index() {
        $facturas = $this->model->getAll();
        require_once 'views/factura.php';
    }

    public function create() {
        // Lógica para crear una factura
    }

    public function update() {
        // Lógica para actualizar una factura
    }

    public function delete() {
        // Lógica para eliminar una factura
    }
}
?>