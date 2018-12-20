<?php

// function getMessage(){
//   $db = getDataBase();
//   $query = $db->query("SELECT * FROM message");
//   $result = $query->fetchall(PDO::FETCH_ASSOC);
//   $query->closeCursor();
//   return $result;
// }

function getMessages($id){
 $db = getDataBase();
 $query = $db->prepare("SELECT m.*  FROM Message AS m INNER JOIN Users AS u ON m.envoyeur_id = u.id WHERE m.destinataire_id = ?");
 $query->execute([$id]);
 $message = $query->fetchall(PDO::FETCH_ASSOC);
 $query->closeCursor();
 return $message;
}


function addMessages($message,$id){
 $db = getDataBase();
 $query = $db->prepare("INSERT INTO Message (date, objet, contenu, envoyeur_id, destinataire_id) VALUES(NOW(), :objet, :contenu, :envoyeur_id, :destinataire_id) ");
 $result = $query->execute([
   "objet" => $message["objet"],
   "contenu" => $message["contenu"],
   "envoyeur_id" => $id,
   "destinataire_id" => $message["pseudo"]]);

   $query->closeCursor();
   return $result;
}

// function getUserByPseudo($form){
//   $db = getDataBase();
//   $query = $db->prepare("SELECT u.* FROM Users AS u INNER JOIN Message AS m ON u.id = m.destinataire_id WHERE u.pseudo=?");
//   $message = $query->execute([$form]);
//   $message = $query->fetch(PDO::FETCH_ASSOC);
//
//   $query->closeCursor();
//   return $message;
// }

function getPseudo($form){

$db = getDataBase();

$query = $db->prepare("SELECT * FROM Users WHERE pseudo=?");
$message = $query->execute([$form]);
$message = $query->fetch(PDO::FETCH_ASSOC);

$query->closeCursor();
return $message;

}
?>