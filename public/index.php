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
        <img class="d-block w-100" src="img/mainCaroussel/picon.jpg" alt="First slide">
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
        <img class="d-block w-100" src="img/mainCaroussel/monde.jpg" alt="Second slide">
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
        <img class="d-block w-100" src="img/mainCaroussel/coffret.jpg" alt="Third slide">
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



<div class="container">
  <section id="categories">
    <h3>Les bières du monde entier à votre porte en 48h !</h3>
    <div class="row d-flex justify-content-around align-self-center">
      <div class="col-sm-6 col-lg-4 mb-2">
        <!--asia category -->
        <a href="cat/asia.php">
        <div class="card">
          <img src="img/catBackground/AsiaBackground.jpg" class="card-img" alt="...">
          <div class="card-img-overlay ">
            <h4 class="card-title text-center jmCatTitle">Asie</h4>
            <img src="img/flags/asia_flag.png" class="catFlagImg" alt="asia flag">
            <p class="card-text ">Préparez vous à déguster des blondes légères, rafraîchissantes et bon marché.</p>
          </div>
        </div></a>
      </div>
      <!--belgium category -->
      <div class="col-sm-6 col-lg-4 mb-2">
         <a href="cat/belgium.php">
        <div class="card  ">
          <img src="img/catBackground/BelgiqueBackground.jpg" class="card-img" alt="...">
          <div class="card-img-overlay ">
            <h4 class="card-title text-center jmCatTitle">Belgique</h4>
            <img src="img/flags/belgium_flag.png" class="catFlagImg" alt="belgium flag">
            <p class="card-text "> Les bières belges comptent parmi les plus variées et les plus nombreuses collections de bières dans le monde.</p>
          </div>
        </div></a>
      </div>
      <!--germany category -->
      <div class="col-sm-6 col-lg-4 mb-2">
        <a href="cat/germany.php">
        <div class="card mb-2 ">
          <img src="img/catBackground/germanyBackground.png" class="card-img" alt="...">
          <div class="card-img-overlay ">
            <h4 class="card-title text-center jmCatTitle">Allemagne</h4>
            <img src="img/flags/germany.png" class="catFlagImg" alt="germany flag">
            <p class="card-text ">Depuis des siècles, la bière fait partie de la culture et de la gastronomie allemande</p>
          </div>
        </div></a>
      </div>
      <!--south america category -->
      <div class="col-sm-6 col-lg-4 mb-2">
        <a href="cat/southAmerica.php">
        <div class="card mb-2 ">
          <img src="img/catBackground/southAmericaBackground.png" class="card-img" alt="...">
          <div class="card-img-overlay ">
            <h4 class="card-title text-center jmCatTitle">Amerique du Sud</h4>
            <img src="img/flags/south_america_flag.png" class="catFlagImg" alt="South America flag">
            <p class="card-text ">Plein des bières carnavalesques!!</p>
          </div>
        </div></a>
      </div>
      <!--france category -->
      <div class="col-sm-6 col-lg-4 mb-2">
        <a href="cat/france.html">
        <div class="card mb-2 ">
          <img src="img/catBackground/franceBackground.jpg" class="card-img" alt="...">
          <div class="card-img-overlay ">
            <h4 class="card-title text-center jmCatTitle">France</h4>
            <img src="img/flags/france_flag.png" class="catFlagImg" alt="france flag">
            <p class="card-text ">Plein des bières cocorico!!</p>
          </div>
        </div></a>
      </div>
      <!--UK category -->
      <div class="col-sm-6 col-lg-4 mb-2">
        <a href="cat/uk.html">
        <div class="card mb-2 ">
          <img src="img/catBackground/UkBackground.jpg" class="card-img" alt="...">
          <div class="card-img-overlay ">
            <h4 class="card-title text-center jmCatTitle">Grande Bretagne</h4>
            <img src="img/flags/UK_flag.png" class="catFlagImg" alt="United Kingdom flag">
            <p class="card-text ">La bière britannique a une tradition fort ancienne et présente un vaste échantillon de types authentiques issus de la fermentation haute.</p>
          </div>
        </div></a>
      </div>
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
<!--PARTIE OU QUENTIN CASSE ENCORE LES BURNES-->



<?php include('../asset/includes/footer.php') ?>
