<form class="mx-auto w-50 my-5" method="POST">
    <div class="form-group">
        <label for="userName">Nom : </label>
        <input type="text" class="form-control" name="user_name" id="userName" placeholder="nom" required="required">
    </div>
    <div class="form-group">
        <label for="userFirstname">Prénom : </label>
        <input type="text" class="form-control" name="user_firstname" id="userFirstname" placeholder="prénom" required="required">
    </div>
    <div class="form-group">
        <label for="user_age">Age : </label>
        <input type="number" class="form-control" name="user_age" id="user_age" placeholder="age" required="required">
    </div>
    <div class="form-group">
        <label for="disponibilite">Disponibilité:</label>
        <select class="form-control" id="disponibilite" name="user_disponible">
            <option id="disponibilite" name="user_disponible" value="1">disponible</option>
            <option id="disponibilite" name="user_indisponible" value="0">indisponible</option>
        </select>
    </div>
    <div class="form-group">
        <label for="commentaire">Commentaire : </label>
        <input type="text" class="form-control" name="user_commentaire" id="userCity" placeholder="commentaire"
            required="required">
    </div>
    <div class="form-group">
        <label for="userStreet">Rue : </label>
        <input type="text" class="form-control" name="user_street" id="userStreet" placeholder="rue" required="required">
    </div>
    <div class="form-group">
        <label for="userCity">Ville : </label>
        <input type="text" class="form-control" name="user_city" id="userCity" placeholder="ville" required="required">
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
    <button type="submit" class="btn btn-primary">Envoyer</button>
    <a href="index.php">Retourner a l'accueil</a>
</form>