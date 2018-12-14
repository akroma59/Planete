<?php

function getUsers() {
    $db = getDataBase();
    $query = $db->query("SELECT * FROM Users");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getUser($id)
{
   $db = getDataBase();
   $query = $db->prepare("SELECT * FROM Users WHERE id= ?");
   $query->execute([$id]);
   $result = $query->fetch(PDO::FETCH_ASSOC);
   $query->CloseCursor();
   return $result;
}


function addUser($user) {
    $db = getDataBase();
    $query = $db->prepare("INSERT INTO Users (nom, prenom, age, disponible, commentaire, rue, ville, status, password, pseudo) VALUES(:nom, :prenom, :age, :disponible, :commentaire, :rue, :ville, :status, :password, :pseudo)");
    $result = $query->execute([
        "nom" => $user["user_name"],
        "prenom" => $user["user_firstname"],
        "age" => $user["user_age"],
        "disponible" => $user["user_disponible"],
        "commentaire" => $user["user_commentaire"],
        "rue" => $user["user_street"],
        "ville" => $user["user_city"],
        "status" => $user["user_status"],
        "password" => $user["user_password"]

        ]);    
    return $result;
}

function updateUser($user){
    $db = getDataBase();
    $query = $db->prepare("UPDATE Users SET nom = :nom, prenom = :prenom, age = :age, disponible = :disponible, commentaire = :commentaire, rue = :rue, ville = :ville status = :status password = :password, pseudo = :pseudo, WHERE id=:id");
    $result = $query->execute([
        "nom" => $user["user_name"],
        "prenom" => $user["user_firstname"],
        "age" => $user["user_age"],
        "disponible" => $user["user_disponible"],
        "commentaire" => $user["user_commentaire"],
        "rue" => $user["user_street"],
        "ville" => $user["user_city"],
        "status" => $user["user_status"],
        "password" => $user["user_password"],
        "id" => $user["id"]        
        ]);    
    return $result;    
}

function deleteUser($id){
    $db = getDataBase();
    $query = $db->prepare("DELETE FROM Users WHERE id=?");
    $result = $query->execute([$id]);
    return $result;    
}

function sortUser($form){
    $db = getDataBase();
    $sql = "SELECT * FROM Users ";
    
    if ($form["ville"])
    {
        $sql .= "WHERE ville = '" . $form['ville']."'";
        
        if ($form["disponible"] == "1")
       {
           $sql .= " AND disponible = '" . $form["disponible"]."'";
       }
            elseif ($form["disponible"] == "0")
            {
                $sql .= " AND disponible = '" . $form["disponible"]."'";
            }
                if ($form['order'])
                    {
                    $sql .= " ORDER BY " . $form["order"] ." ";
                    }    
                        if ($form["triage"] == "1")
                        {
                            $sql .= " ASC";
                        }
                            elseif ($form["triage"] == "0")
                            {
                                $sql .= " DESC";
                            }
                            
 
    }

    elseif(isset($form["disponible"]))
   {
       if ($form["disponible"] == "1")
       {
           $sql .= "WHERE disponible = '" . $form["disponible"]."'";
       }
            elseif ($form["disponible"] == "0")
            {
                $sql .= "WHERE disponible = '" . $form["disponible"]."'";
            }
                if ($form["order"])
                {
                    $sql .= " ORDER BY " . $form["order"]. " ";
                }
                    if ($form["triage"] == "1")
                    {
                        $sql .= " ASC";
                    }
                        elseif ($form["triage"] == "0")
                        {
                            $sql .= " DESC";
                        }
   }
   
    var_dump ($sql) ;
    $query = $db->query($sql);
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

function verifyUser() {
    $db = getDataBase();
    $reponses = $db->query('SELECT * FROM Users');
    $reponse = $reponses->fetchall();
}
?>
