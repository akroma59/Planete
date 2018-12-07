<?php
require "../model/db.php";
require "../model/userManager.php";

if (!empty($_POST)) {
    if(updateUser($_POST, $db)) {
        header("Location: index.php");
        exit;    
    }
}

$id = (int) $_GET["id"];
$result = getUser($id,$db);

require "../view/modifyUserView.php";


?>