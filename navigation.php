<?php 
             if($_SESSION!=null){
            $identification=$_SESSION['pseudo'];
            $controle1 = $db->prepare("SELECT * FROM utilisateur where pseudo = :pseudo");
            $controle1->execute(
               [
                                                                
                   'pseudo'=> $identification
                   
               ]);
               
             $resultat1 = $controle1->fetch();
          
           
             }
     ?>

<div class="contenair-fluid sticky-top"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <!-- Container wrapper -->
            <div class="container-fluid">
              <!-- Toggle button -->
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarCenteredExample"
                aria-controls="navbarCenteredExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg>
              </button>
          
              <!-- Collapsible wrapper -->
              <div class="row collapse navbar-collapse justify-content-center"
                id="navbarCenteredExample" >
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link text-info text-uppercase" href="index.php"><i class="fas fa-globe fa-1x" ></i>Accueil</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link text-info text-uppercase" href="film.php"><i class="fas fa-film" width="2em" height="2em"></i>films</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link text-info text-uppercase" href="personnages.php"> <i class="fas fa-user-astronaut"></i>personnages</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link text-info text-uppercase" href="vaisseaux.php"> <i class="fab fa-galactic-senate"></i>vaisseaux</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link text-info text-uppercase" href="planete.php"><i class="fas fa-globe-africa"></i>planètes</a>
                  </li>
                  <?php if($_SESSION!=null){ if(  ($resultat1['identification'] == 0) ||  ($resultat1['identification'] == 1)){?>
                  <li class="nav-item active">
                    <a class="nav-link text-info text-uppercase" href="vote.php">vote</a>
                  </li>
                  <?php } }?>
                </ul>
                <?php if($_SESSION!=null){ if(  $resultat1['identification'] == 1){?>
             <a href="gestion.php" ><button type="button" class="btn btn-warning ">gestion</button></a> 
             <?php } }?>
              
              
                <!-- Left links -->
              </div>
              
              <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
          </nav>
          </div>
          
    </div>
    