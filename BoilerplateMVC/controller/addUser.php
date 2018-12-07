<?php
require "../model/db.php";
require "../model/userManager.php";

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
      }
    }
    if (addBenevole($_POST, $db)) {
      header('Location: index.php');
      exit;
    }

    // if ($_POST) {
    //     # code...
    // }
   }
require "../view/addUserView.php";

?>