<?php 
require "../model/db.php";
require "../model/userManager.php";


if(!empty($_POST))
{
 $users = sortUser($_POST,$db);
}
else{
 $users = getUsers($db);
}


include "../view/indexView.php";
?>