<form class="mx-auto w-50 my-5" method="POST">
    <input type="hidden" name="id" value="<?php echo($result["id"])?>" >
    <div class="form-group">
        <label for="userName">Nom : </label>
        <input type="text" class="form-control" name="user_name" id="userName" placeholder="nom" required="required" value="<?php echo($result["nom"])?>">
    </div>
    <div class="form-group">
        <label for="userFirstname">Prénom : </label>
        <input type="text" class="form-control" name="user_firstname" id="userFirstname" placeholder="prénom" required="required" value="<?php echo($result["prenom"])?> ">
    </div>
    <div class="form-group">
        <label for="user_age">Age :  </label>
        <input type="number" class="form-control" name="user_age" id="user_age" placeholder="age" required="required" value="<?php echo($result["age"])?>">
    </div>
    <div class="form-group">
        <label for="disponibilite">Disponibilité:</label>
        <select class="form-control" id="dispo" name="user_disponible" value="<?php echo $result["disponible"]; ?>">
            <option id="disponibilite" name="user_disponible" value="1">disponible</option>
            <option id="disponibilite" name="user_indisponible" value="0">indisponible</option>
        </select>
    </div>
    <div class="form-group">
        <label for="commentaire">Commentaire :  </label>
        <input type="text" class="form-control" name="user_commentaire" id="userCity" placeholder="commentaire" required="required" value="<?php echo($result["commentaire"])?>">
    </div>
    <div class="form-group">
        <label for="userStreet">Rue :  </label>
        <input type="text" class="form-control" name="user_street" id="userStreet" placeholder="rue" required="required" value="<?php echo($result["rue"])?>">
    </div>
    <div class="form-group">
        <label for="userCity">Ville : </label>
        <input type="text" class="form-control" name="user_city" id="userCity" placeholder="ville" required="required" value="<?php echo($result["ville"])?> ">
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" id="status" name="user_status">
            <option id="status" name="user_admin" value="1">Admin</option>
            <option id="status" name="user_user" value="0">User</option>
        </select>
    </div>
    <div class="form-group">
        <label for="userPassword">Password : </label>
        <input type="password" class="form-control" name="user_password" id="userPassword" placeholder="password" required="required">
    </div>
    <!--Envoie les données du formulaire selon si c'est un ajout ou une modification-->
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
