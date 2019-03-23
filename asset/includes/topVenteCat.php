<div class="container">
  <h3> Les meilleures ventes du mois</h3>
  <?php
  $rand= array_rand($myBeers, 3);
  $sliderArray[0] = $myBeers[$rand[0]];
  $sliderArray[1] = $myBeers[$rand[1]];
  $sliderArray[2] = $myBeers[$rand[2]];?>
  <div class="container">
  <div class="row d-flex justify-content-around">
  <?php foreach ($sliderArray as $biere){
     include('card.php');
  }?>
      </div>
  </div>
  <hr>
</div>
