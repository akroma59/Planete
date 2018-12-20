<?php
function showMessage(){
 require "model/messageManager.php";

 $messages =  getMessages($_SESSION["user"]["id"]);

if (!empty($_POST)) {
 $destinataire = getPseudo($_POST["pseudo"]);
 $_POST["pseudo"] = $destinataire["id"];


 $sendMessage = addMessages($_POST,$_SESSION["user"]["id"]);
 if ($sendMessage) {
   echo "Message envoyé !";
 }

}
   require "view/messageView.php";
   exit;
}
?>