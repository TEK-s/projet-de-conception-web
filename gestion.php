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
    

<div class=" contenair-fluid text-center ">
<div class=" row container-fluid ext-center" >
    <div class="col-md-3 col-12  container-fluid mb-4 ">
      <br>
      <a href="gestionF.php"><h2 class="my-4 mb-5 text-uppercase shadow-lg p-3 text-center film mb-5 bg-white rounded "> <span class="badge badge-white">films </span></h2></a>
    
        <p  class=" text-center text-uppercase  text-black commentaires"> 
           souhaitez vous apportez des modifications aux films
          </p>
      </div>
      <div class="col-md-3 col-12  container-fluid mb-4 ">
      <br>
      <a href="gestionP.php"><h2 class="my-4 mb-5 text-uppercase shadow-lg p-3 text-center film mb-5 bg-white rounded "> <span class="badge badge-white">personnages </span></h2></a>
    
        <p  class=" text-center text-uppercase  text-black commentaires"> 
        souhaitez vous apportez des modifications aux personnages
          </p>
      </div>
      <div class="col-md-3 col-12  container-fluid mb-4 ">
      <br>
      <a href="gestionPL.php"><h2 class="my-4 mb-5 text-uppercase shadow-lg p-3 text-center film mb-5 bg-white rounded "> <span class="badge badge-white">planètes </span></h2></a>
    
        <p  class=" text-center text-uppercase  text-black commentaires"> 
        souhaitez vous apportez des modifications aux planètes 
          </p>
      </div>
      <div class="col-md-3 col-12  container-fluid mb-4 ">
      <br>
      <a href="gestionV.php"><h2 class="my-4 mb-5 text-uppercase shadow-lg p-3 text-center film mb-5 bg-white rounded "> <span class="badge badge-white">vaisseaux </span></h2></a>
    
        <p  class=" text-center text-uppercase  text-black commentaires"> 
        souhaitez vous apportez des modifications aux vaisseaux
          </p>
      </div>
</div>
<div class=" row container-fluid ext-center" >
    <div class="col-md-3 col-12  container-fluid mb-4 ">
      <br>
      <a href="gestionA.php"><h2 class="my-4 mb-5 text-uppercase shadow-lg p-3 text-center film mb-5 bg-white rounded "> <span class="badge badge-white">admin </span></h2></a>
    
        <p  class=" text-center text-uppercase  text-black commentaires"> 
           souhaitez vous apportez des modifications aux admins
          </p>
      </div>
</div>
</div>
</body>
</html>