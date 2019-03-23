<?php include('../asset/includes/headerAdmin.php');


$errors =[];

if (!empty($_POST)){
      #VERIFICATION NOM DE LA BIERE
  if (empty($_POST['beerName'])) {
    $errors['beerName'] = "Merci de remplir le champ Nom de la bière";
  }elseif (!preg_match("/[a-z0-9]/i", $_POST['beerName'])) {
    $errors['beerName'] = "Le nom de bière n'est pas correct";
  }
    #VERIFICATION IMAGE
  if (empty($_POST['beerImg'])){
    $errors['beerImg'] = "L'image n'est pas correct";
  }
  #VERIFICATION DESCRIPTION
  if (empty($_POST['beerDescription'])) {
    $errors['beerDescription'] = "La description est vide";
  }elseif (!preg_match("/[a-zA-Z0-9]/", $_POST['beerDescription'])) {
    $errors['beerDescription'] = "La description de la bière n'est pas correct";
  }
    #VERIFICATION Note GOUT
  if (empty($_POST['noteGout'])) {
    $errors['noteGout'] = "La note du goût de la bière est vide";
  }elseif (!preg_match("/[0-9]/", $_POST['noteGout'])) {
    $errors['noteGout'] = "La note du goût de la bière n'est pas correct";
  }elseif ($_POST['noteGout'] > 5) {
    $errors['noteGout'] = "La note doit être inférieur à 5";
  }
    #VERIFICATION Note SOIF
  if (empty($_POST['noteSoif'])) {
    $errors['noteSoif'] = "La note de soif est vide";
  }elseif (!preg_match("/[0-9]/", $_POST['noteSoif'])) {
    $errors['noteSoif'] = "La note de soif de la bière n'est pas correct";
  }elseif ($_POST['noteSoif'] > 2) {
    $errors['noteSoif'] = "La note de soif doit être inférieur à 2";
  }
    #VERIFICATION Note SOIF
  if (empty($_POST['noteAmertume'])){
    $errors['noteAmertume'] = "La note de l'amertume de la bière est vide";
  }elseif (!preg_match("/[0-9]/", $_POST['noteAmertume'])) {
    $errors['noteAmertume'] = "La note de l'amertume de la bière n'est pas correct";
  }elseif ($_POST['noteAmertume'] > 2){
    $errors['noteAmertume'] = "La note d'amertume doit être inférieur à 2";
  }
    #VERIFICATION %ALCOOL
  if (empty($_POST['alcool'])) {
    $errors['alcool'] = "Le pourcentage d'alcool est vide";
  }elseif (!preg_match("/[0-9]/", $_POST['alcool'])){
    $errors['alcool'] = "Le pourcentage d'alcool de la bière n'est pas correct";
  }
    #VERIFICATION PAYS
  if (empty($_POST['pays'])){
    $errors['pays'] = "Le pourcentage d'alcool est vide";
  }elseif (!preg_match("/[a-zA-Z]/", $_POST['pays'])) {
    $errors['pays'] = "Le pourcentage d'alcool de la bière n'est pas correct";
  }
    #VERIFICATION PRIX UNITAIRE
  if (empty($_POST['prixUnitaire'])) {
    $errors['prixUnitaire'] = "Le prix unitaire de la bière est vide";
  }elseif (!preg_match("/[0-9]/", $_POST['prixUnitaire'])) {
    $errors['prixUnitaire'] = "Le prix unitaire de la bière n'est pas correct";
  }
    #VERIFICATION PRIX CAISSE
  if (empty($_POST['prixCaisse'])) {
    $errors['prixCaisse'] = "Le prix de la caisse de bière est vide";
  }elseif (!preg_match("/[0-9]/", $_POST['prixCaisse'])) {
    $errors['prixCaisse'] = "Le prix de la caisse de bière n'est pas correct";
  }
    #VERIFICATION PRIX FUT
  if (empty($_POST['prixFut']) ) {
    $errors['prixFut'] = "Le prix du fut de bière est vide";
  }elseif (preg_match("/(NA)/", $_POST['noteAmertume'])) {
    $errors['prixFut'] = "Le prix du fut de bière n'est pas correct";
  }
}

 ?>

<div class="container">
  <h3 class="text-center">Ajouter un produit</h3>
</div>


<div class="container">

<?php
  if (!empty($errors) && !empty($_POST)) {
    echo '<div class="alert alert-danger">';
    foreach ($errors as $champ => $error){
      echo $error . '<br />';
    }
    echo '</div>';
  }elseif (!empty($_POST) && empty($errors)) {
    header("Location: ../south_america.php");
  }
?>

<form class="" action="" method="post">

  <div class="form-group">
    <label for="beerName">Nom de la bière</label>
    <input type="text" name="beerName"  id="beerName" class="form-control" required value = "<?php if(!empty($_POST)){echo(htmlentities($_POST['beerName']));} ?>">
  </div>

  <div class="form-group">
    <label for="beerImg">Image</label>
    <input type="text" name="beerImg" id="beerImg" class="form-control" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['beerImg']));}?>">
  </div>

  <div class="form-group">
    <label for="beerDescription">Description</label>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="noteGout">Note Gout</label>
      <input name="noteGout" type="number" step="0.1" min="0" class="form-control" id="noteGout" placeholder="/5" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['noteGout']));} ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="noteSoif">Note Soif</label>
      <input name="noteSoif" type="number" step="0.1" min="0" class="form-control" id="noteSoif" placeholder="/2" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['noteSoif']));} ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="noteAmertume">Note Amertume</label>
      <input name="noteAmertume" type="number" step="0.1" min="0" class="form-control" id="noteAmertume" placeholder="/2" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['noteAmertume']));} ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="alcool">% Alcool</label>
      <input name="alcool" type="number" step="0.1" min="0" class="form-control" id="alcool" placeholder="%" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['alcool']));} ?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="fermentation">Fermentation</label>
      <select class="form-control" id="fermentation" name="fermentation">
        <option>Basse</option>
        <option>Haute</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="pays">Pays</label>
      <input name="pays" type="text" class="form-control" id="pays" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['pays']));} ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="category">Categorie</label>
      <select class="form-control" id="category" name="category">
        <option>Allemage</option>
        <option>Amerique du Sud</option>
        <option>Asie</option>
        <option>Belgique</option>
        <option>France</option>
        <option>UK</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="prixUnitaire">Prix Unitaire</label>
      <input name="prixUnitaire" type="number" step="0.1" min="0" class="form-control" id="prixUnitaire" placeholder="€" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['prixUnitaire']));} ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="prixCaisse">Prix Caisse</label>
      <input name="prixCaisse" type="number" step="0.1" min="0" class="form-control" id="prixCaisse" placeholder="€" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['prixCaisse']));} ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="prixFut">Prix Fut</label>
      <input name="prixFut" type="text" class="form-control" id="prixFut" placeholder="NA" required value="<?php if(!empty($_POST)){echo(htmlentities($_POST['prixFut']));} ?>">
    </div>
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-elegant" name="button">Ajouter</button>
  </div>
</form>
</div>

  <?php include('../asset/includes/footerAdmin.php');?>
