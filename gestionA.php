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
            <div class=" row container-fluid section1 text-center" >
                <div class=" col-12  container-fluid mb-4 ">
                  <br>

    <div class="table-responsive container-fluid">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th >speudo</th>
      <th >email</th>
      
    </tr>
  </thead>
  <tbody>
      <?php 
                 
             $controle1 = $db->prepare("SELECT * FROM utilisateur where identification=:identification");
             $controle1->execute([
               'identification'=>1
             ]);
             while( $resultat1 = $controle1->fetch()){?>
<tr>
      <td><?php echo $resultat1['pseudo'];?></td>
      <td><?php echo $resultat1['email'];?></td>
      <td>
          <form method="POST" action="inscriptionA.php">
              <input type="hidden" name="modifierF_id" id="modifierF_id"  value="<?php echo $resultat1['id'];?>">
          <button type="submit" name="ajoutA" class="btn btn-primary">
             ajouter
      </button>
             </form>
    </td>
      <td>
      <form method="POST" action="supprimerA.php">
              <input type="hidden" name="supprimerA_id" id="supprimerA_id"  value="<?php echo $resultat1['id'];?>">
    <button type="submit" class="btn btn-primary" name="supprimerA">
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