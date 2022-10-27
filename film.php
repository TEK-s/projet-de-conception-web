<?php  include 'BDD.php';
global $db;
session_start();
$title = "listes des films";

include 'head copy.php'?>
<body >
<!--menu de navigation-->
<?php include 'header.php';

include 'navigation.php'; ?>
       
    <main>
    <div class=" row container-fluid ">
    <?php 
                 
                 $controle1 = $db->prepare("SELECT * FROM film");
                 $controle1->execute([]);
                 while( $resultat1 = $controle1->fetch()){?>
      
              
      <?php if($_SESSION!=null){?>
        <div class="col-md-2  col-12 my-5 mr-5 ml-3 film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
               <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?>
                <h4 class="my-4 font-weight-bold text-center"><?php echo $resultat1['nom'];?></h4>
                <form method="POST"  action="description_F.php"  enctype="multipart/form-data">
                <input type="hidden" name="film_id" id="film_id" value="<?php echo $resultat1['id'];?>">
                <button type="submit" name="suite" id="suite" class="btn btn-primary">Savoir plus</button>
                </form>
              </div>
              <?php }
               else{?>
              <div class="col-md-2  col-12 my-5 mr-5 ml-3 film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
              <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?>
               <h4 class="my-4 font-weight-bold text-center"><?php echo $resultat1['nom'];?></h4>
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      savoir plus
                    </button>
                    <!-- Modal -->
                    <div class="modal fade cadre" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">information importante</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            pour pouvoir acceder à ce contenuvous devez vous inscrire 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
              <?php } ?>

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