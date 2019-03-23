<?php include('../../asset/includes/headerCat.php') ?>
<?php include('southAmerica/description.php') ?>

<?php $myBeers = array_map('str_getcsv', file('../../asset/datas/southAmerica.csv'));?>

<section id="caroussel ">
  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <?php include('../../asset/includes/slideCat.php') ?>


  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</section>

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

<?php include('../../asset/includes/footerCat.php');?>
