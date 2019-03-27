<div class="col-12 col-md-4 col-lg-3 px-1 py-2 ">
  <div class="card p-1">
    <div class="row m-0">
      <div class="col-sm-12   px-0 d-flex align-items-center">
        <img class="card-img-top" src="<?=$biere[1]?>" alt="image de <?=$biere[0]?>">
      </div>
      <div class="card-body  col-sm-12  bg-dark text-white">
        <h4 class="card-title  text-center  "><?=utf8_encode($biere[0])?></h4>
        <p class="card-text text-justify tom-min-height"><?=utf8_encode($biere[2])?></p>
        <button type="button" name="button" class="btn btn-warning p-1" data-toggle="modal" data-target="#<?=str_replace(" ", "_",$biere[0])?>">Voir plus...</button>
      </div>
    </div>
  </div>
</div>
 <!-- DEBUT partie popup  -->
 <div id="<?=str_replace(" ", "_",$biere[0])?>" class="modal fade" role="dialog">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header bg-dark text-light">
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 col-6">
               <!-- TITRE DU POPUP  -->
               <h4 class="modal-title"><?=$biere[0]?></h4>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-6">
               <!--  BOUTON CROIX FERMETURE -->
               <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
             </div>
           </div>
         </div>
       </div>
       <div class="modal-body">
         <!-- CORPS DU POP UP  -->
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-none d-lg-block">
               <!--  IMAGE DANS LE POPUP -->
               <img class="card-img-top tom-image" src="<?=$biere[1]?>" alt="image de <?=utf8_encode($biere[0])?>">
             </div>
             <div class="col-lg-8 col-md-8 col-sm-8 col-12">
               <div class="row">
                 <table class="table table-borderless table-responsive">
                   <tr>
                     <td>
                       <table class="table table-bordered">
                         <!-- TABLEAU GOUT/SOIF  -->
                         <tr>
                           <td>Gout</td>
                           <td>Soif</td>
                           <td>Amertume</td>
                         </tr>
                         <tr>
                           <td><?=utf8_encode($biere[4])?>/5</td>
                           <td><?=utf8_encode($biere[5])?>/2</td>
                           <td><?=utf8_encode($biere[6])?>/2</td>
                         </tr>
                       </table>
                     </td>
                   </tr>
                   <tr>
                     <td class="font-weight-bold">Alcool/volume</td>
                     <td><?=utf8_encode($biere[7])?>%</td>
                   </tr>
                   <tr>
                     <td class="font-weight-bold">fermentation</td>
                     <td><?=utf8_encode($biere[8])?></td>
                   </tr>
                   <tr>
                     <td class="font-weight-bold">Pays</td>
                     <td><?=utf8_encode($biere[11])?></td>
                   </tr>
                 </table>
               </div>
               <div class="row d-flex justify-content-around">
                 <!-- BOUTON RESEAU SOCIAUX  -->
                 <i class="fab fa-twitter"></i>
                 <i class="fab fa-facebook"></i>
                 <i class="fab fa-google-plus"></i>
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <br><br>
               <table class="table">
                 <!--TABLEAU PRIX   -->
                 <tr>
                   <td class="font-weight-bold">Unité</td>
                   <td><?=utf8_encode($biere[3])?> €</td>
                   <td> <button type="button" class="btn btn-warning text-dark p-1" name="button">Ajouter au Panier</button> </td>
                 </tr>
                 <tr>
                   <td class="font-weight-bold">Caisse (x6)</td>
                   <td><?=utf8_encode($biere[9])?> €</td>
                   <td> <button type="button" class="btn btn-warning text-dark p-1" name="button">Ajouter au Panier</button> </td>
                 </tr>
                 <tr>
                   <td class="font-weight-bold">Fut</td>
                   <td><?=utf8_encode($biere[10])?></td>
                   <?php if ($biere[10] != "NA"): ?>
                     <td> <button type="button" class="btn btn-warning text-dark p-1" name="button">Ajouter au Panier</button> </td>
                   <?php endif; ?>
                 </tr>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>
