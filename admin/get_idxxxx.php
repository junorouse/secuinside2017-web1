<?php
require_once("config.php");


$stmt = $pdo->prepare("select idx_token from supports where read_check=0");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($rows);

$stmt = $pdo->prepare("update supports set read_check=1 where read_check=0");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

