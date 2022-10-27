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
            if(isset($_POST['modifierPL'])){
                $id=$_POST['modifierPL_id'];
                $controle1 = $db->prepare("SELECT * FROM planete where id = :id");
                $controle1->execute(
                   [
                                                                    
                       'id'=> $id
                       
                   ]
                );
                $resultat1 = $controle1->fetch();         
   ?>
         <div class="col-6 ">
         <form method="POST"  action="modifierPL.php"  enctype="multipart/form-data">
     <div class="form-group">
       <label for="exampleInputEmail1">nom</label>
       <input type="text" class="form-control" name="nom" id="nom" value=<?php echo $resultat1['nom'];?> placeholder="nom du personnage"  required>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">description</label>
       <textarea class="form-control " name="description" id="description" placeholder="description" required> <?php echo $resultat1['description'];?></textarea>
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1"> image </label>
       <input type="file" class="form-control" name="image" id="image"  placeholder="image" required>
     </div>
     <input type="hidden" name="modifierPL_id" id="modifierPL_id"  value="<?php echo $id;?>">
     <button type="submit" name="validerPL" id="validerPL" class="btn btn-primary">valider</button>
   </form>
         </div>
       
               <?php 
              

            }
               ?>   

</body>
</html>