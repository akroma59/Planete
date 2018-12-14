<?php
require "model/userManager.php";
require "model/messageManager.php";

$id=$_SESSION["user"]["id"];

function showMessage() {
    $messages = getMessages($_SESSION["user"]["id"]);
    require "view/messageView.php";
    // var_dump($messages);
}

function showAddMessage() {
    if (!empty($_POST) && (isset($id) && (!empty($id)))) {
        $addMessage = addMessages($_POST, $id);
    }
}

$test = addMessages($_POST, $id);
var_dump ($test);
?>

