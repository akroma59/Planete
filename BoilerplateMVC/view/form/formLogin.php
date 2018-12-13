<form class="mx-auto w-50 my-5" method="POST">
    <div class="form-group">
        <label for="userName">Nom : </label>
        <input type="text" class="form-control" name="user_name" id="userName" placeholder="nom" required="required">
    </div>
    <div class="form-group">
        <label for="password">Password : </label>
        <input type="password" class="form-control" name="user_password" id="password" placeholder="password" required="required">
    </div>
    <!--Envoie les données du formulaire selon si c'est un ajout ou une modification-->
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>