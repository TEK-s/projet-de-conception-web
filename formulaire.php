function test_input($data){
    $data= trim($data);
    $data= strip_tags($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data) 
    return $data;
}
if(isset($_POST['formsend'])){
			extract($_POST);
				if(!empty($mot_de_passe) && !empty($confirmation) && !empty($email) && !empty($pseudo)){
					include 'BDD.php';
					if(($resultat1 == 0) and  ($resultat2 == 0)){
						if(($mot_de_passe == $confirmation)){

				$options = [
					'cost' => 12,
				];

				$mdp= password_hash($mot_de_passe, PASSWORD_BCRYPT, $options);
				$data = $db->prepare(" INSERT INTO utilisateur(pseudo,email,mot_de_passe) VALUES(:pseudo,:email,:mot_de_passe)");
												$data->execute([
													'pseudo'=>$pseudo,
													'email'=> $email,
													'mot_de_passe'=>$mdp,	
												]);
				echo'<a href="accueil.php"> inscription</a></button>';
			}
			else{?>
				<div class="alert alert-danger" role="alert">
							le mot de saisie ne correspond pas à celui de la confirmation
				</div>
													
			<?php

			}
														global $db; 
														$controle1 = $db->prepare(" SELECT email FROM utilisateur where email = :email ");
														$controle1->execute([
															
															'email'=> $email
															
														]);

														$controle2= $db->prepare(" SELECT pseudo FROM utilisateur where pseudo = :pseudo ");
														$controle2->execute([
															
															'pseudo'=> $pseudo
															
														]);

															$resultat1 = $controle1->rowCount();
															$resultat2 = $controle2->rowCount();
							if(($resultat1 == 0) and  ($resultat2 == 0)){
								if(($mot_de_passe == $confirmation)){

						$options = [
							'cost' => 12,
						];

						$mdp= password_hash($mot_de_passe, PASSWORD_BCRYPT, $options);
						$data = $db->prepare(" INSERT INTO utilisateur(pseudo,email,mot_de_passe) VALUES(:pseudo,:email,:mot_de_passe)");
														$data->execute([
															'pseudo'=>$pseudo,
															'email'=> $email,
															'mot_de_passe'=>$mdp,	
														]);
						echo'<a href="accueil.php"> inscription</a></button>';
					}
					else{?>
						<div class="alert alert-danger" role="alert">
									le mot de saisie ne correspond pas à celui de la confirmation
						</div>
															
					<?php
		
					}
			}
			else{?>
				<div class="alert alert-danger" role="alert">
													il exite déjà un utilisateur avec ce pseudo ou cette email 
				</div>
													
			<?php

			}
		}
		}
		
        ?>
        



        





        if(!empty($mot_de_passe) && !empty($confirmation) && !empty($email) && !empty($pseudo)){
					include 'BDD.php';
					if(preg_match('/^[a-zA-Z0-9_]+$/',$pseudo){
						
						
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                   $pseudo= test_input($pseudo);
                   $email= test_input($email);
                   $mot_de_passe= test_input($mot_de_passe);

                   include 'BDD.php';
												global $db; 
														$controle1 = $db->prepare(" SELECT email FROM utilisateur where email = :email ");
														$controle1->execute([
															
															'email'=> $email
															
														]);

														$controle2= $db->prepare(" SELECT pseudo FROM utilisateur where pseudo = :pseudo ");
														$controle2->execute([
															
															'pseudo'=> $pseudo
															
														]);

															$resultat1 = $controle1->rowCount();
															$resultat2 = $controle2->rowCount();
							if(($resultat1 == 0) and  ($resultat2 == 0)){
								if(($mot_de_passe == $confirmation)){

						$options = [
							'cost' => 12,
						];

						$mdp= password_hash($mot_de_passe, PASSWORD_BCRYPT, $options);
						$data = $db->prepare(" INSERT INTO utilisateur(pseudo,email,mot_de_passe) VALUES(:pseudo,:email,:mot_de_passe)");
														$data->execute([
															'pseudo'=>$pseudo,
															'email'=> $email,
															'mot_de_passe'=>$mdp,	
														]);
						echo'<a href="accueil.php"> inscription</a></button>';
					}
					else{?>
						<div class="alert alert-danger" role="alert">
									le mot de saisie ne correspond pas à celui de la confirmation
						</div>
															
					<?php
		
					}
			}
			else{?>
				<div class="alert alert-danger" role="alert">
													il exite déjà un utilisateur avec ce pseudo ou cette email 
				</div>
													
			<?php

			}
		}
		}
		
		?>
						
                    }
                    else{
                        <div class="alert alert-danger" role="alert">
						votre email est invalide
	                    </div>
                    }
                    
                    }
                    else{
                        <div class="alert alert-danger" role="alert">
						votre speudo ne peut contenir que des caractères alphanumérique et _
			        	</div>
                    }
				
					
























                    include 'BDD.php';
												global $db; 
														$controle1 = $db->prepare(" SELECT email FROM utilisateur where email = :email ");
														$controle1->execute([
															
															'email'=> $email
															
														]);

														$controle2= $db->prepare(" SELECT pseudo FROM utilisateur where pseudo = :pseudo ");
														$controle2->execute([
															
															'pseudo'=> $pseudo
															
														]);

															$resultat1 = $controle1->rowCount();
															$resultat2 = $controle2->rowCount();
							if(($resultat1 == 0) and  ($resultat2 == 0)){
								if(($mot_de_passe == $confirmation)){

						$options = [
							'cost' => 12,
						];

						$mdp= password_hash($mot_de_passe, PASSWORD_BCRYPT, $options);
						$data = $db->prepare(" INSERT INTO utilisateur(pseudo,email,mot_de_passe) VALUES(:pseudo,:email,:mot_de_passe)");
														$data->execute([
															'pseudo'=>$pseudo,
															'email'=> $email,
															'mot_de_passe'=>$mdp,	
														]);
						echo'<a href="accueil.php"> inscription</a></button>';
					}
					else{?>
						<div class="alert alert-danger" role="alert">
									le mot de saisie ne correspond pas à celui de la confirmation
						</div>
															
					<?php
		
					}
			}
			else{?>
				<div class="alert alert-danger" role="alert">
													il exite déjà un utilisateur avec ce pseudo ou cette email 
				</div>
													
			<?php

			}
		}
		}
		
		?>


        
