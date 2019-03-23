<?php include('../../asset/includes/headerCat.php') ?>
<?php include('uk/description.php') ?>


<?php $myBeers = array_map('str_getcsv', file('../../asset/datas/uk.csv'));?>

<div class="container">
  <section id="nosProduits">
    <h3 >
      Notre Sélection :
    </h3>
    <div class="container">
      <div class="row d-flex justify-content-around">
        <?php foreach ($myBeers as $biere) {
          include('../../asset/includes/card.php');
        }?>
      </div>
    </div>
  </section>
</div>

<?php include('../../asset/includes/footerCat.php') ?>
