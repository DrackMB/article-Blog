
<div class="container">
        <div class="container col-6">
         
        <form action="ajouterUser" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="Prenom">Prenom</label>
      <input type="text" class="form-control" name="Prenom" placeholder="Prenom">
    </div>
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input type="text" class="form-control" name="Address" placeholder="Address">
    
  </div>
  <div class="form-group">
    <label for="Address Email">Address Email</label>
    <input type="text" class="form-control" name="AddressEmail" placeholder="Address Email">
  </div>
  <div class="form-group">
    <label for="Password">Mot de passe</label>
    <input type="password" class="form-control" name="motdePasse" placeholder="mot de Passe">
  </div>
  <div class="form-group">
    <label for="ConfirPassword">Confirmation  mot de passe</label>
    <input type="password" class="form-control"  placeholder="Confirmation  passeword">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Number">Numero de telephone</label>
      <input type="tel" class="form-control" name="numeroDeTelephone" placeholder="numero de telephone">
    </div>
    <div class="form-group col-md-4">
      <label for="Sexe">Sexe</label>
      <select id="Sexe" class="form-control" name ="Sexe">
        <option selected>Choose...</option>
        <option value = "H">Homme</option>
        <option value="F" >Femme</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
          <span class="form-check-sign">
            <span class="check"></span>
          </span>
      </label>
    </div>
  </div>
            <button type="submit" name="submit" value="OL" class="btn btn-primary">S'inscrire </button>
</form>
      </div>
    </div>