<?php  
session_start();
include 'BDD.php';
global $db;  
$title = "personnages";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Etape 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/last.css" rel="stylesheet">
</head>
<body >
<?php include 'header.php';
?>
       <?php include 'navigation.php'; ?>
    <main>
    <div class=" row container-fluid ">
    <?php 
                 
                 $controle1 = $db->prepare("SELECT * FROM personnage");
                 $controle1->execute([]);
                 while( $resultat1 = $controle1->fetch()){?>
      
              
              <div class="col-md-2 col-sm-2 my-5 mx-4 film shadow-lg p-3  bg-white rounded  text-center">
              <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?>
                <h4 class="my-4 font-weight-bold text-center"><?php echo $resultat1['nom'];?></h4>
                <form method="POST"  action="description_P.php"  enctype="multipart/form-data">
                <input type="hidden" name="personnage_id" id="personnage_id" value="<?php echo $resultat1['id'];?>">
                <button type="submit" name="suite" id="suite" class="btn btn-primary">Savoir plus</button>
                </form>

              </div>
              <?php
                  }
               
         ?>
        </div>
              
        
          
            
          
         
</main>
<footer class="bg-dark text-center">
  <p class="text-uppercase text-white fin">&copy; <br>
  PRISO Jeffrey<br>
  Arthur SANDJONG</p>
  
</footer>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>