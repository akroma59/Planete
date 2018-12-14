<?php include "template/header.php"; ?>
<?php include "form/formMessage.php"; ?>

<table class="table">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Objet</th>
     <th scope="col">Contenu</th>
     <th scope="col">Date/heure</th>
     <th scope="col">Destinataire</th>
     <th scope="col">Envoyeur</th>
   </tr>
 </thead>
 <tbody>
     <?php foreach ($messages as $key => $message){ ?>
   <tr>
     <th scope="row"> <?php echo $message["id"] ?> </th>
     <td><?php echo $message["objet"] ?> </td>
     <td><?php echo $message["contenu"] ?> </td>
     <td><?php echo $message["date"] ?> </td>
     <td><?php echo $message["destinataire_id"] ?> </td>
     <td><?php echo $message["envoyeur_id"] ?> </td>
   </tr>

   <?php } ?>
 </tbody>
</table>


<?php include "template/footer.php"; ?>