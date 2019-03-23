<?php include('../../asset/includes/headerCat.php') ?>
<?php include('germany/description.php') ?>

<?php $myBeers = array_map('str_getcsv', file('../../asset/datas/germany.csv'));?>

  <?php include('../../asset/includes/topVenteCat.php') ?>

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
