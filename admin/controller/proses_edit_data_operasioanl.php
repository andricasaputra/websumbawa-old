<?php

require_once('header_proses.php');

$id					=$_POST['id'];

$ekspor				=htmlspecialchars($conn->real_escape_string($_POST['ekspor']));

$impor				=htmlspecialchars($conn->real_escape_string($_POST['impor']));

$domas				=htmlspecialchars($conn->real_escape_string($_POST['domas']));

$dokel				=htmlspecialchars($conn->real_escape_string($_POST['dokel']));

$waktu				=htmlspecialchars($conn->real_escape_string($_POST['waktu']));

$pnbp				=htmlspecialchars($conn->real_escape_string($_POST['pnbp']));

$connection->edit("UPDATE data_operasional SET ekspor='$ekspor', impor='$impor', domas='$domas' , dokel='$dokel' , waktu='$waktu' , pnbp='$pnbp' WHERE id ='$id'");


?>	