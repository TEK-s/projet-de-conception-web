<?php  include 'BDD.php';
             global $db;
session_start();
$title = "page d'acceuil";

include 'head copy.php'?>
<body >
    <!--menu de navigation-->
    <?php include 'header.php';
   
    include 'navigation.php'; ?>
    
    <main >
    <div class="contenair-fluid">
            <div id="carouselExampleSlidesOnly"  class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="image/fond4.png"  class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/va1.jpg "  class="d-block w-100 " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/fond5.png"  class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
        </div>
        <div class=" container-fluid  text-center">
            <div class=" row   container-fluid " >
                <div class="col-md-3 my-4 section1 col-12 mb-4 mr-5 ml-3  ">
                  <br>
                    <a href="film.php"><h2 class="mb-5 text-uppercase film shadow-lg p-3  bg-white  rounded titres"> <span class="badge badge-white">films </span></h2></a>
                    <p  class=" my-4 text-center text-uppercase  text-white commentaires"> 
                        
                       venez découvrir les films de l'univers Star wars </p>
                  </div>
    <?php 
                 
                 $controle1 = $db->prepare("SELECT * FROM film LIMIT 3");
                 $controle1->execute([]);
                 while( $resultat1 = $controle1->fetch()){?>
      
              
      <?php if($_SESSION!=null){?>
        <div class="col-md-2  col-12 my-5  mr-5 ml-3 film shadow-lg p-3  bg-white  rounded  text-center">
               <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?>
                <h4 class="my-4 font-weight-bold text-center"><?php echo $resultat1['nom'];?></h4>
                <form method="POST"  action="description_F.php"  enctype="multipart/form-data">
                <input type="hidden" name="film_id" id="film_id" value="<?php echo $resultat1['id'];?>">
                <button type="submit" name="suite" id="suite" class="btn btn-primary">Savoir plus</button>
                </form>
              </div>
              <?php }
               else{?>
              <div class="col-md-2 my-5 col-12 mr-5 ml-3 text-center film shadow-lg p-3  bg-white  rounded  text-center">
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
                            pour pouvoir acceder à ce contenu vous devez vous inscrire 
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
            <div class="row text-center container-fluid ">
              <div class="col-md-12 mx-2 col-sm-12">
              <a href="film.php"><h4 class="text-uppercase text-white suite"><u> voir plus </u></h4></a>
              </div>
          </div>
          </div>
                    <hr>
         
          <div class=" contenair-fluid section2 text-center">
            <div class=" row container-fluid " >
                <div class="col-md-3 my-4 section2 col-12 mb-4 mr-5 ml-3  ">
                  <br>
                  <a href="personnages.php"> <h2 class=" text-uppercase film shadow-lg p-3 mb-5 bg-white  rounded titres"> <span class="badge badge-white">personnages </span></h2></a>
                    <p  class="my-4 text-center text-uppercase  text-white commentaires"> 
                       Apprenez à connaitre les personnages qui ont marqués l'histoire de chacun des films Star wars </p>
                  </div>
    <?php 
                 
                 $controle1 = $db->prepare("SELECT * FROM personnage LIMIT 3");
                 $controle1->execute([]);
                 while( $resultat1 = $controle1->fetch()){?>
      
              
      <?php if($_SESSION!=null){?>
        <div class="col-md-2 my-5 col-12 my-1 mr-5 my-5 ml-3 film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
               <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?>
                <h4 class="my-4 font-weight-bold text-center"><?php echo $resultat1['nom'];?></h4>
                <form method="POST"  action="description_P.php"  enctype="multipart/form-data">
                <input type="hidden" name="personnage_id" id="personnage_id" value="<?php echo $resultat1['id'];?>">
                <button type="submit" name="suite" id="suite" class="btn btn-primary">Savoir plus</button>
                </form>
              </div>
              <?php }
               else{?>
              <div class="col-md-2 my-5 col-12 mr-5 my-5 ml-3 film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
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
                            pour pouvoir acceder à ce contenu vous devez vous inscrire 
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
            <div class="row text-center container-fluid ">
              <div class="col-md-12 my-5 mx-2 col-sm-12">
              <a href="personnages.php"><h4 class="text-uppercase text-white suite"><u> voir plus </u></h4></a>
              </div>
          </div>
          </div>
         
          <div class=" container-fluid section3 text-center">
            <div class=" row container-fluid " >
                <div class="col-md-3 my-4 section3 col-12 mb-4 mr-5 ml-3  ">
                  <br>
                    <a href="planete.php"><h2 class=" text-uppercase film shadow-lg p-3 mb-5 bg-white  rounded titres"> <span class="badge badge-white">planètes </span></h2></a>
                    <p  class="my-4 text-center text-uppercase  text-white commentaires"> 
                        
                       venez découvrir ls planètes qui ont été présentent dans chacun des films Star wars </p>
                  </div>
    <?php 
                 
                 $controle1 = $db->prepare("SELECT * FROM planete LIMIT 3");
                 $controle1->execute([]);
                 while( $resultat1 = $controle1->fetch()){?>
      
              
      <?php if($_SESSION!=null){?>
        <div class="col-md-2 my-5  col-12 my-5 mr-5 ml-3film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
               <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?>
               <h4 class="my-4 font-weight-bold text-center"><?php echo $resultat1['nom'];?></h4>
                <form method="POST"  action="description_PL.php"  enctype="multipart/form-data">
                <input type="hidden" name="planete_id" id="planete_id" value="<?php echo $resultat1['id'];?>">
                <button type="submit" name="suite" id="suite" class="btn btn-primary">Savoir plus</button>
                </form>
              </div>
              <?php }
               else{?>
              <div class="col-md-2 my-5 col-12 mr-5 ml-3 film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
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
                            pour pouvoir acceder à ce contenu vous devez vous inscrire 
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
            <div class="row text-center  container-fluid ">
              <div class="col-md-12 my-5 mx-2 col-sm-12">
              <a href="planete.php"><h4 class="text-uppercase text-white suite"><u> voir plus </u></h4></a>
              </div>
          </div>
          </div>
         
          <div class=" container-fluid section4 text-center">
            <div class=" row container-fluid " >
                <div class="col-md-3 my-4 section4 col-12 mb-4 mr-5 ml-3  ">
                  <br>
                  <a href="vaisseaux.php">  <h2 class=" text-uppercase film shadow-lg p-3 mb-5 bg-white  rounded titres"> <span class="badge badge-white">vaisseaux </span></h2></a>
                    <p  class="my-4 text-center text-uppercase  text-white commentaires"> 
                        
                       Apprenez à connaitre les vaisseaux qui ont été présenté dans l'univers Star wars </p>
                  </div>
    <?php 
                 
                 $controle1 = $db->prepare("SELECT * FROM vaisseaux LIMIT 3");
                 $controle1->execute([]);
                 while( $resultat1 = $controle1->fetch()){?>
      
              
      <?php if($_SESSION!=null){?>
        <div class="col-md-2  col-12 my-5 mr-5 ml-3 film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
               <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid w-100 ">'?>
                <h4 class="my-4 font-weight-bold text-center"><?php echo $resultat1['nom'];?></h4>
                <form method="POST"  action="description_V.php"  enctype="multipart/form-data">
                <input type="hidden" name="vaisseaux_id" id="vaisseaux_id" value="<?php echo $resultat1['id'];?>">
                <button type="submit" name="suite" id="suite" class="btn btn-primary">Savoir plus</button>
                </form>
              </div>
              <?php }
               else{?>
              <div class="col-md-2  col-12 mr-5 ml-3 my-5 film shadow-lg p-3 mb-5 bg-white  rounded  text-center">
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
                            pour pouvoir acceder à ce contenu vous devez vous inscrire 
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
            <div class="row text-center container-fluid ">
              <div class="col-md-12 mx-2 col-sm-12">
              <a href="vaisseaux.php"><h4 class="text-uppercase text-white suite"><u> voir plus </u></h4></a>
              </div>
          </div>

          </div>
        
    </main>
    <footer class="bg-dark text-center">
  <p class="text-uppercase text-white fin">&copy; <br>
  PRISO Jeffrey<br>
  Arthur SANDJONG</p>
  
</footer>
    
    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>