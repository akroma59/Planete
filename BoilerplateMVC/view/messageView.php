<?php include "template/header.php"; ?>
<?php include "form/formMessage.php"; ?>

<table class="table">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Objet</th>
     <th scope="col">Contenu</th>
     <th scope="col">Date/heure</th>
     <th scope="col">Envoyeur</th>
     <th scope="col">Destinataire</th>
   </tr>
 </thead>
 <tbody>
     <?php foreach ($messages as $key => $message){ ?>
   <tr>
     <th scope="row"> <?php echo $message["id"] ?> </th>
     <td><?php echo $message["objet"] ?> </td>
     <td><?php echo $message["contenu"] ?> </td>
     <td><?php echo $message["date"] ?> </td>
     <td><?php echo $_SESSION["user"]["nom"] ?> </td>
     <td><?php echo $message["pseudo"] ?> </td>
   </tr>

   <?php } ?>
 </tbody>
</table>


<?php  

include "template/footer.php"; ?>