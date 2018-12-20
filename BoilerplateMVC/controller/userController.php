<?php
require "model/userManager.php";

function showUsers() {
        if(!empty($_POST))
        {
        $users = sortUser($_POST);
        }
        else{
        $users = getUsers();
        }
    include "view/indexView.php";
}

function showUpdateUser() {
if (!empty($_POST)) {
    if(updateUser($_POST)) {
      header("Location: Accueil.php");
      exit;    
    }
}

$id = (int)htmlspecialchars($_GET["id"]);
$result = getUser($id);

require "view/modifyUserView.php";
}

function showAddUser() {
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
      }
    }
    if (addUser($_POST)) {
      header("Location: Accueil.php");
      exit;
    }
    $id = htmlspecialchars($_GET["id"]);
    $delete=deleteUser($id);
    
    header("Location: Accueil.php");
    }

   require "view/addUserView.php";
}

function showDeleteUser(){
$id = htmlspecialchars($_GET["id"]);
$delete=deleteUser($id);

header("Location: Accueil.php");
}

function login()
{
   $reponses = getDataBase()->query('SELECT * FROM Users');
   $reponse = $reponses->fetchall(PDO::FETCH_ASSOC);
   //On vérifie si le formulaire a été rempli
   if(!empty($_POST))
   {
       //On nettoie les entrées du formulaire
       foreach ($_POST as $key => $value)
       {
           $_POST[$key] = htmlspecialchars($value);
       }
       //On récupère les utilisateurs stockés
       foreach ($reponse as $key =>$user)
       {
        if($user["nom"] === $_POST["user_name"] && $user["password"]  ===  $_POST["user_password"])
           {
              initializeUserSession($user);
           }
       }
       if(isLogged())
       {
         if ($_SESSION["user"]["status"] === "admin") {
            redirectTo("Accueil");
        }
         else {
            redirectTo("message");
         }
       }
    }
   include "view/loginView.php";
  }

function showMessage() {
    require "model/messageManager.php";
    $messages = getMessages($_SESSION["user"]["id"]);
    require "view/messageView.php";
    var_dump($messages);
}

function disconnect() {
    session_start();
    if (isLogged()) {
        logout();
        redirectTo("");
    }
    else {
        redirectTo("");
    }
}

?>
