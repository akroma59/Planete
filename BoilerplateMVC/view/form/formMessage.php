<form class="mx-auto w-50 my-5" method="POST">
    <div class="form-group">
       <label for="exampleInputEmail1">Envoyer un message à :</label>
       <input type="text" class="form-control" id="exampleInputEmail1" name="pseudo" placeholder="Destinateur">
    </div>
    <input type="hidden" name="envoyeur_id" value="<?php echo($_SESSION["user"]["id"])?>" >
    <div class="form-group">
        <label for="objet">Objet : </label>
        <input type="text" class="form-control" name="objet" id="userFirstname" placeholder="objet" required="required">
    </div>
    <div class="form-group">
        <label for="contenu">Contenu :  </label>
        <input type="text" class="form-control" name="contenu" id="contenu" placeholder="contenu" required="required">
    </div>
    <!--Envoie les données du formulaire selon si c'est un ajout ou une modification-->
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
