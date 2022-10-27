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
    
<?php 
            if(isset($_POST['modifierF'])){
                $id=$_POST['modifierF_id'];
                $controle1 = $db->prepare("SELECT * FROM film where id = :id");
                $controle1->execute(
                   [
                                                                    
                       'id'=> $id
                       
                   ]
                );
                $resultat1 = $controle1->fetch();         
   ?>
         <div class="col-6 ">
         <form method="POST"  action="modifierF.php"  enctype="multipart/form-data">
     <div class="form-group">
       <label for="exampleInputEmail1">nom</label>
       <input type="text" class="form-control" name="nom" id="nom" value=<?php echo $resultat1['nom'];?> placeholder="nom du personnage"  required>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">auteur</label>
       <input type="text" class="form-control" name="auteur" id="auteur" value="<?php echo $resultat1['auteur'];?>"  placeholder="nom de l'auteur" required>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">date de réalisation</label>
       <input type="text" class="form-control" name="date_rel" id="date_rel" value="<?php echo $resultat1['date_rel'];?>" placeholder="date de réalisation" required>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">description</label>
       <textarea class="form-control " name="description" id="description" placeholder="description" required> <?php echo $resultat1['description'];?></textarea>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1"> image </label>
       <input type="file" class="form-control" name="image" id="image"  placeholder="image" required>
     </div>
     <input type="hidden" name="modifierF_id" id="modifierF_id"  value="<?php echo $id;?>">
     <button type="submit" name="validerF" id="validerF" class="btn btn-primary">valider</button>
   </form>
         </div>
       
               <?php 
              

            }
               ?>    
                   <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>