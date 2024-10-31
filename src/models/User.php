<?php

require_once '../src/config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = getDatabaseConnection();
    }

    public function getUserById($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
