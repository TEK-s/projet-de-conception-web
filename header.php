
<header class=" container-fluid py-3">
            <div class="row  container-fluid  align-items-center ">
                <div class="col-md-4  text-center container-fluid col-sm-12 ">
                  <a class="text-muted" href="https://www.facebook.com"><img src="image/fb.png" class="icone"></a>
                  <a class="text-muted" href="https://www.instagram.com"><img src="image/ig-removebg-preview.png" class="icone"></a>
                  <a class="text-muted" href="https://www.twitter.com"><img src="image/Twitter_Bird.svg.png" class="icone"></a>
                  <a class="text-muted" href="https://www.snapchat.com"><img src="image/snap.png" class="icone"></a>
                  <a class="text-muted" href="https://www.youtube.com"><img src="image/youtube-removebg-preview.png" class="icone"></a>
                </div>
                <div class="col-md-4 col-sm-12   container-fluid  text-center ">
                  <a class="blog-header-logo text-dark" href="#"><img src="image/Star_wars.svg" class="logo"></a>
                </div>
               
              <?php if($_SESSION==null){?>
                <div class="col-md-4 col-sm-12  container-fluid  text-center align-items-center">
                  <a class="btn btn-sm btn-outline-info" href="inscription.php">inscription</a>&nbsp;<a class="btn btn-sm btn-outline-info" href="connexion.php">connexion</a>
                </div>
              <?php }
               else{?>
                <div class="col-md-4 col-sm-12  container-fluid  text-center align-items-center">
                <button type="button" class="btn btn-success"><h4 ><?= $_SESSION['pseudo'];?> </h4>   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg></button>
                  &nbsp;<a class="btn btn-sm btn-outline-info active"   href="deconnexion.php?deconnexion"> 
                   déconnexion</a>
                </div>
              <?php } ?>
              </div>
              
      </header>
 
   