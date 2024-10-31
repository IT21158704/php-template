<?php

function getDatabaseConnection() {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
        exit;
    }
}
