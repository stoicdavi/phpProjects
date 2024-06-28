<?php 
if (isset($_GET['id'])){
    include 'db.php';
    $id = $_GET['id'];
    $connection -> query("DELETE FROM feedback WHERE id = $id");
    header('Location: /bscit/political/politicalFeedbac/view.php');
}