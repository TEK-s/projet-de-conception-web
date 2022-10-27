<?php  include 'BDD.php';
global $db;
session_start();
$title = "descrition personnages";

include 'head copy.php'?>
<body >
<!--menu de navigation-->
<?php include 'header.php';

include 'navigation.php'; ?>
      
       <?php 
             if(isset($_POST['suite'])){
              $id=$_POST['personnage_id'];
              $controle1 = $db->prepare("SELECT * FROM personnage where id = :id");
              $controle1->execute(
                 [
                                                                  
                     'id'=> $id
                     
                 ]
              );
              $resultat1 = $controle1->fetch(); 
             
     ?>
    
    
    <main >
    
        <section class=" contenair-fluid section1 ">
            <div class=" row container-fluid " >
                <div class="col-md-4 col-sm-4 text-center  mb-4 ">
                  <br>
                  <h2 class="my-4 mb-5 text-uppercase shadow-lg p-3  mb-5 bg-white rounded "> <span class="badge badge-white"><?php echo $resultat1['nom'];?></span></h2>
                 <?php echo'<img src="image/'.$resultat1['image'].'" class="container-fluid  ">'?>
                  </div>
                  <div class="col-md-8 col-sm-8 my-5 container ">
                    
                      
                        <div class="card border-dark mb-4" style="width: 100%;">
                            <div class="card-header text-center">Caractéristques du personnage</div>
                            <div class="card-body text-dark">
                                <p class="card-text"><span style="font-weight: bold;">Espèce:</span> <?php echo $resultat1['espece'];?></p>
                          <p class="card-text"><span style="font-weight: bold;">Sexe:</span> <?php echo $resultat1['sexe'];?></p>
                          <p class="card-text"><span style="font-weight: bold;">Date de Naissance:</span> <?php echo $resultat1['date_naiss'];?></p>
                          <p class="card-text"><span style="font-weight: bold;">Date de décès:</span> <?php echo $resultat1['date_deces'];?></p>
                          <p class="card-text"><span style="font-weight: bold;">Taille:</span> <?php echo $resultat1['taille'];?></p>
                              <p class="card-text"><?php echo $resultat1['description'];?></p>
                            </div>
                          </div>

                      
                      
                   </div>
                 
                      

                      



                  
   
                </div>
        
            
          </section>
         
    </main>
    <?php } ?>
    <footer class="bg-dark text-center">
      <p class="text-uppercase text-white fin">&copy; <br>
      PRISO Jeffrey<br>
      Arthur SANDJONG</p>
      
    </footer>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>

</body>
</html>