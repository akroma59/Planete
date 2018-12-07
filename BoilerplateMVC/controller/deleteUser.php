<?php
require "../model/db.php";
require "../model/userManager.php";

$id = htmlspecialchars($_GET["id"]);
$delete=deleteUser($id,$db);



header("Location:index.php");
?>
