<form class="container" method="post">
 <div class="form-row">
   <div class="form-group col-md-4">
     <label for="inputState">Triée par :</label>
     <select name="order" id="inputState" class="form-control">
       <option  value="nom" selected>Nom</option>
       <option  value="age" >Age</option>
     </select>
   </div>
   <div class="form-group col-md-4">
     <label for="inputState">Disponibilité :</label>
     <select class="form-control" id="disponibilite" name="disponible">
       <option id="disponibilite" value="1">disponible</option>
       <option id="disponibilite" value="0">indisponible</option>
     </select>
   </div>
   <div class="form-group col-md-2">
     <label for="inputZip">Triée par ville :</label>
     <input type="text" class="form-control" id="inputZip" name="ville" >
   </div>
   <div class="form-group col-md-4">
     <label for="inputState">Trier + / - :</label>
     <select class="form-control" id="triage" name="triage">
       <option id="triage" value="1">Ascendant</option>
       <option id="triage" value="0">Descendant</option>
     </select>
   </div>
   <button type="submit" class="btn btn-dark  col-md-2 mt-4" style="height: 3rem;">Go</button>
 </div>
</form>