<?php
//Function qui retourne un tableau contenant les routes de notre application
//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "user",
      "login",
    ],
    "Accueil" => [
      "user",
      "showUsers",
      "status" => "admin"
    ],
    "addUser" => [
      "user",
      "showAddUser",
      "status" => "admin"      
    ],
    "updateUser" => [
      "user",
      "showUpdateUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "deleteUser" => [
      "user",
      "showDeleteUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "message" => [
      "message",
      "showMessage",
      "status" => "admin"
    ],
  ];
}
 ?>