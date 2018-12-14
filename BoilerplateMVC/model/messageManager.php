<?php

function getMessages($id) {
  $db = getDataBase();
  $messages = $db->prepare("SELECT m.* FROM Message AS m 
                            INNER JOIN Users AS u ON m.envoyeur_id = u.id ");
  $messages->execute([$id]);
  $message = $messages->fetchall(PDO::FETCH_ASSOC);
  $messages->CloseCursor();
  return $message;
}
function addMessages($message, $id) {
  $db = getDataBase();
  $messages = $db->prepare("INSERT INTO Message (destinataire_id, envoyeur_id, objet, contenu) VALUES(:destinataire_id, :envoyeur_id, :objet, :contenu)");
  $message = $messages->execute([
    "destinataire_id" => $message["destinataire_id"],
    "envoyeur_id" => $id,
    "objet" => $message["objet"],
    "contenu" => $message["contenu"]
  ]);
  $messages->CloseCursor();
  return $message;
}
 ?>