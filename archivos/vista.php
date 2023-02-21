<?php
require '../database/conexion.php';

$id = $_GET['id'];

$mi_pdf = $id;
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
readfile($mi_pdf);
?>