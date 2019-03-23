<?php include('../asset/includes/header.php') ?>


<section id="caroussel">
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
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/mainCaroussel/biere1.jpg" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Notre Best-Seller</h3>
        <p>Le Picon c'est la vie !</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/mainCaroussel/biere2.jpg" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Nouvel Arrivage !</h3>
        <p>Faites vous plaisir avec notre nouvelle arrivage !</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="img/mainCaroussel/biere3.jpg" alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Concours</h3>
        <p>Participez à notre concours et gagnez votre coffret !</p>
      </div>
    </div>
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

<?php $myCategories = array_map('str_getcsv', file('../asset/datas/categories.csv'));?>

<div class="container">
  <section id="categories">
    <h3>Les bières du monde entier à votre porte en 48h !</h3>
    <div class="row d-flex justify-content-around align-self-center">

      <?php foreach ($myCategories as $category){
        include('../asset/includes/indexCategories.php');
      }?>

    </div>
  </section>
</div>

<!-- ABOUT US JDBOC PARTIE -->
<div class="container-fluid jd-padding">
  <section id="aboutUs">
    <div class="jd-card">
      <!--PARTIE OU QUENTIN CASSE LES BURNES-->
      <div class="container-fluid testVideo">
        <div class="jd-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="video">
          <source src="video/biere.webm" type="video/webm" class="video">
        </video>
        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
              <h3 class="txtVideo titreVideo">La bière vous réserve bien des surprises...</h3>
              <br />
              <p class="lead mb-0 txtVideo">Protége des maladies cardiovasculaires, du diabète par ses vertus diurétiques. Elle aurait de plus un effet bénéfique pour la peau et les ongles.</p>
              <br />
              <p class="lead mb-0 txtVideo">Contrairement aux idées reçues, elle ne fait pas grossir car elle contient moins de calories pour la même quantité de jus de fruit ou d'un verre de vin.</p>
              <br />
              <p class="lead mb-0 txtVideo">Bien sûr il n'est pas question d'en boire d'une façon immodérée... mais consommer de façon régulière et modérée n'aurait donc que des avantages.</p>
              <br />
              <p class="lead mb-0 txtVideo"> <strong>A la vôtre !</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<br>

<!--PARTIE OU QUENTIN CASSE ENCORE LES BURNES-->



<?php include('../asset/includes/footer.php') ?>
