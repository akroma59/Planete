<?php 
include "template/header.php";
require "../view/form/formSortUser.php";
?>
<div class="card-deck m-0 text-center text-white">
  <div class="card  bg-success mb-3">
    <div class="card-body">
      <a href="addUser.php" class="card-link">
        <h5 class="card-title">Ajout utilisateur</h5>
      </a>
    </div>
  </div>
  <table class="table table-dark bg_tableau">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</$id<th>
        <th scope="col">age</th>
        <th scope="col">disponible</th>
        <th scope="col">commentaire</th>
        <th scope="col">rue</th>
        <th scope="col">ville</th>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $key => $user) {?>
      <tr>
        <td>
          <?php echo htmlspecialchars($user["id"]);?>
        </td>
        <td>
          <?php echo htmlspecialchars($user["nom"]);?>
        </td>
        <td>
          <?php echo htmlspecialchars($user["prenom"]);?>
        </td>
        <td>
          <?php echo htmlspecialchars($user["age"]);?>
        </td>
        <?php if ($user["disponible"] == true )  {  ?>
        <td class="bg-success">
          <?php echo "disponible"; ?>
        </td>
        <?php }else { ?>
        <td class="bg-danger">
          <?php echo "indisponible"; ?>
        </td>
        <?php  } ?>
        <td>
          <?php echo htmlspecialchars($user["commentaire"]);?>
        </td>
        <td>
          <?php echo htmlspecialchars($user["rue"]);?>
        </td>
        <td>
          <?php echo htmlspecialchars($user["ville"]);?>
        </td>
        <td><a href="deleteUser.php?id=<?php echo $user["id"];?>" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        <td><a href="modifyUser.php?id=<?php echo $user["id"];?>" class="card-link"><i class="fa fa-address-card"
              aria-hidden="true"></i></a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>

<?php include "template/footer.php"?>