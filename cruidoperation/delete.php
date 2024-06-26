<?php
if (isset($_GET['id'])){
    include 'db.php';
    $id = $_GET['id'];
    $conn->query("DELETE FROM clients WHERE id = $id");
    header('Location: /functions/cruidoperation/index.php');
    exit;
}