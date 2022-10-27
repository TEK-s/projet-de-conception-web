<?php
                 if(isset($_POST['suite'])){
                  if($_SESSION===null){?>
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  SAVOIR PLUS
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NOTIFICATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        POUR POUVOIR ACCEDER AU CONTENU SUIVANT VOUS DEVEZ ÊTRE INSCRIT 0 LA PAGE
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                 <?php }else {?>
                   <form method="POST" action="description_P.php"  enctype="multipart/form-data">
                   <input type="hidden" name="personnage_id" id="personnage_id" value="<?php echo $resultat1['id'];?>">
                   <button type="submit" name="suite" id="suite" class="btn btn-primary">Savoir plus</button>
                   </form>
                 <?php }
                }
             
                ?>
              </div>
              <?php
              
                  }
                 
         ?>

body{
     
     background-image: url(../image/pexels.jpg)no-repeat center center fixed;
     background-repeat: no-repeat;
     background-size: cover;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-attachment: fixed;
     font-family: 'Times New Roman', Times, serif;
 }