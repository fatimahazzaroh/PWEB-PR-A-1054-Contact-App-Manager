<?php
require_once 'contact.php';

$id = $_GET['id'] ?? null;
if (!is_numeric($id)) {
    header("Location: index.php"); 
    exit();
}

$success = contact::delete($id);

if ($success) {
    header("Location: index.php");
    exit();
} else {
    echo "Gagal menghapus kontak.";
}
?>