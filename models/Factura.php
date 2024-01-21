<?php
class Factura {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->prepare('SELECT * FROM facturas');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM facturas WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO facturas (cliente, total) VALUES (:cliente, :total)');
        return $stmt->execute($data);
    }

    public function update($data) {
        $stmt = $this->pdo->prepare('UPDATE facturas SET cliente = :cliente, total = :total WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM facturas WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>