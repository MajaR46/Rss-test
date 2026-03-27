<?php

$host = 'podatkovna-baza';
$db   = 'test_db';
$user = 'root';
$pass = 'superVarnoGeslo';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Povezava na bazo uspešna!";
} catch (PDOException $e) {
    echo "❌ Napaka: " . $e->getMessage();
}
