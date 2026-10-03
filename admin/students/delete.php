<?php
session_start();
    include "../../config/database.php";
    if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){
        header("Location: ../../index.php");
        exit;
    }
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    mysqli_query($conn, "DELETE FROM users
    WHERE id=$id AND role=' ");
    header("Location: index.php");
    exit;
    
?>