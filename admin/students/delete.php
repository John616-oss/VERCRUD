<?php
session_start();

include "../../config/database.php";

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: ../../index.php");
    exit;
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $sql = "DELETE FROM users WHERE id=$id AND role='student'";

    mysqli_query($conn, $sql);
}

header("Location: index.php");
exit;
?>