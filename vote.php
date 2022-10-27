<?php  include 'BDD.php';
global $db;
session_start();
$title = "listes des personnages";

include 'head copy.php'?>
<body >
<!--menu de navigation-->
<?php include 'header.php';

include 'navigation.php'; ?>
    <main>

               
   <?php       
   
                        $controle2 = $db->prepare(" SELECT * FROM utilisateur where pseudo = :pseudo ");
                        $controle2->execute([
                            
                            'pseudo'=> $_SESSION['pseudo']
                            
                        ]);


                        $utilisateur = $controle2->fetch(); 
   
   
   
                 $controle1 = $db->prepare("SELECT * FROM film");
                 $controle1->execute([]);
                 while( $film = $controle1->fetch()){
							
															 $controle3= $db->prepare(" SELECT vote FROM votes where (id_utilisateur = :id_utilisateur and id_film = :id_film)");
															 $controle3->execute([
																 
																 'id_utilisateur'=> $utilisateur['id'],
																 'id_film'=> $film['id'],											 
															 ]);
	 
															 $note=$controle3->fetch();
																 $resultat3 = $controle3->rowCount();
																	if(($resultat3 == 0) ){?>






      
      <section class=" contenair-fluid section1 ">
            <div class=" row container-fluid " >
                <div class="col-md-4 col-sm-4 text-center  mb-4 ">
                  <br>
                  <h2 class="my-4 mb-5 text-uppercase shadow-lg p-3   bg-white rounded "> <span class="badge badge-white"><?php echo $film['id'];?><?php echo $film['nom'];?></span></h2>
                 <?php echo'<img src="image/'.$film['image'].'" class="container-fluid w-75 ">'?>
                  </div>
                  <div class="col-md-8 col-sm-8 my-5 container ">
                    
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                        <div class="card border-dark mb-4" style="width: 100%;">
                            <div class="card-header text-center">Votes</div>
                            <div class="card-body text-center justify-content-center text-center text-dark">
                            <div class="container justify-content-center">
    <div class="row justify-content-center">
 
<form method="post" action="ajout_votes.php" >
 
    <div>
        <h3>vous n'avez pas ecore votez pour ce film</h3>
    </div>
 
    <div class="row justify-content-center">
    <div class="rateyo " id= "rating"
         data-rateyo-rating="0"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    
    <input type="hidden" name="rating">
                 </div>
    </div>
    
    
    </div>
   
    <div >
    <input type="hidden" name="film" value="<?php echo $film['id']?>">
    <input type="hidden" name="utilisateur" value="<?php echo $utilisateur['id']?>" >
    <input type="submit" name="vote"> </div>
 
</form>


            
</div>
</div>
                            </div>
                          </div>  
                   </div>
                 
                      

                      



                  
   
                </div>
        
            
          </section>
  
              <?php } }?>

 


              <?php       
   
   $controle2 = $db->prepare(" SELECT * FROM utilisateur where pseudo = :pseudo ");
   $controle2->execute([
       
       'pseudo'=> $_SESSION['pseudo']
       
   ]);


   $utilisateur = $controle2->fetch(); 



$controle1 = $db->prepare("SELECT * FROM film");
$controle1->execute([]);
while( $film = $controle1->fetch()){
       
                                        $controle3= $db->prepare(" SELECT vote FROM votes where (id_utilisateur = :id_utilisateur and id_film = :id_film)");
                                        $controle3->execute([
                                            
                                            'id_utilisateur'=> $utilisateur['id'],
                                            'id_film'=> $film['id'],											 
                                        ]);

                                        $note=$controle3->fetch();
                                            $resultat3 = $controle3->rowCount();
                                               if(($resultat3 != 0) ){?>







<section class=" contenair-fluid section1 ">
<div class=" row container-fluid " >
<div class="col-md-4 col-sm-4 text-center  mb-4 ">
<br>
<h2 class="my-4 mb-5 text-uppercase shadow-lg p-3   bg-white rounded "> <span class="badge badge-white"><?php echo $film['id'];?><?php echo $film['nom'];?></span></h2>
<?php echo'<img src="image/'.$film['image'].'" class="container-fluid w-75 ">'?>
</div>
<div class="col-md-8 col-sm-8 my-5 container ">

 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
   <div class="card border-dark mb-4" style="width: 100%;">
       <div class="card-header text-center">Votes</div>
       <div class="card-body text-center justify-content-center text-center text-dark">
       <div class="container justify-content-center">
<div class="row justify-content-center">



<div class="row justify-content-center">
<div class="rateyo " 
data-rateyo-rating="<?php echo $note['vote'];?>"
data-rateyo-num-stars="5"
>
</div>


</div>
</div>








</div>
</div>
       </div>
     </div>  
</div>

 

 





</div>


</section>

<?php } }?>





         
    </main>
     
                
              
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