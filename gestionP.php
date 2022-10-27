<?php  include 'BDD.php';
             global $db;
session_start();
$title = "page d'acceuil";

include 'head copy.php'?>
<!--menu de navigation-->
<?php include 'header.php';
   
   include 'navigation.php';
   include 'navigation admin.php'; ?>
   
   
<body >
    
<div class=" contenair-fluid section1 text-center ">
            <div class=" row container-fluid section1 justify-content-center" >
                <div class="col-4">
             <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  ajouter
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajout du personnage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation"  class="inscription-form text-center" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">nom</label>
                                            <input type="text" class="form-control" name="nom" id="nom" placeholder="pnom du personnage"  required>
                                            <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">espece</label>
                                        <input type="text" class="form-control" name="espece" id="espece"   placeholder="nomde l'espèce" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                </div>
                        </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">date naisssance</label>
                                    <input type="text" class="form-control" name="date_naiss" id="date_naiss"  placeholder="date de naissance" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                        </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip02">date de décès</label>
                                    <input type="text" class="form-control" name="date_deces" id="date_deces"  placeholder="date de décès" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                </div>
                        </div>
                    </div>
                        <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationTooltip01">sexe</label>
                                    <input type="text" class="form-control" name="sexe" id="sexe"  placeholder="sexe" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip02">taille</label>
                        <input type="text" class="form-control" name="taille" id="taille"  placeholder="taille" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                <div class="col-md-12 mb-3">
                        <label for="validationTooltip02">description</label>
                        <textarea class="form-control" name="description" id="description"  placeholder="les yeux" required></textarea>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip02">image</label>
                    <input type="file" class="form-control" name="image" id="image"  placeholder="les yeux" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
        </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="formsend" id="formsend" class="btn btn-primary">Save changes</button>
</form>
      </div>
      
    </div>
  </div>
</div> 

                </div>
            </div>
        <?php    include('ajoutP.php');?>
            <div class=" row container-fluid section1 text-center" >
                <div class=" col-12  container-fluid mb-4 ">
                  <br>

    <div class="table-responsive container-fluid">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th >nom</th>
      <th >espece</th>
      <th >date de naissance</th>
      <th >date de decès</th>
      <th >sexe</th>
      <th>taille</th>
      <th>description</th>
      <th>image</th>
      
    </tr>
  </thead>
  <tbody>
      <?php 
                 
             $controle1 = $db->prepare("SELECT * FROM personnage");
             $controle1->execute([]);
             while( $resultat1 = $controle1->fetch()){?>
<tr>
      <td><?php echo $resultat1['nom'];?></td>
      <td><?php echo $resultat1['espece'];?></td>
      <td><?php echo $resultat1['date_naiss'];?></td>
      <td><?php echo $resultat1['date_deces'];?></td>
      <td><?php echo $resultat1['sexe'];?></td>
      <td><?php echo $resultat1['taille'];?></td>
      <td><?php echo $resultat1['description'];?></td>
      <td> <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?></td>
      <td>
          <form method="POST" action="gestionP_M.php">
              <input type="hidden" name="modifier_id" id="modifier_id"  value="<?php echo $resultat1['id'];?>">
          <button type="submit" name="modifier" class="btn btn-primary">
             modifier
      </button>
             </form>
    </td>
      <td>
      <form method="POST" action="supprimer.php">
              <input type="hidden" name="supprimer_id" id="supprimer_id"  value="<?php echo $resultat1['id'];?>">
    <button type="submit" class="btn btn-primary" name="supprimer">
    supprimer 
    </button></td>
    </form>
    </tr>
            <?php }
     ?>
    
    
  </tbody>
</table>
    


</div>
  </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>