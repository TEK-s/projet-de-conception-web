<?php include 'BDD.php';
             global $db;
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap.js" rel="stylesheet">
	<link href="fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
	<link type="text/css" href="css/sign.css" rel="stylesheet">
	<title>Inscription</title>
</head>
<?php include 'navigation.php'; 
$id=0; ?>
    
<body>
	<div class="login-container d-flex align-items-center justify-content-center">
		<form class="inscription-form text-center" method="POST">
			<h1 class="mb-5 font-weight-light text-uppercase">inscription</h1>
			<div class="form-group">
				<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="pseudo" required>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" id="email"   placeholder="email" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe"  placeholder="mot de passe" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="confirmation" id="confirmation" required placeholder="confirmation du mot de passe">
			</div>
			<button type="submit" name="formsend" id="formsend" class="btn btn-primary btn-block"> inscription</button>
		</form>
	</div>
	<?php

function test_input($data){
	$data= trim($data);
	$data= stripslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}


if(isset($_POST['formsend'])){
		extract($_POST);
	 $id1=1;
		
			if(!empty($mot_de_passe) and !empty($confirmation) and !empty($email) and !empty($pseudo)){
				if(preg_match('/^[a-zA-Z0-9_]+$/',$pseudo)){
					if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
						$pseudo= test_input($pseudo);
						$email= test_input($email);
						$mot_de_passe= test_input($mot_de_passe);
						$confirmation = test_input($confirmation);
	 
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
																		$data = $db->prepare(" INSERT INTO utilisateur(pseudo,email,mot_de_passe,identification) VALUES(:pseudo,:email,:mot_de_passe,:identification)");
																										$data->execute([
																											'pseudo'=>$pseudo,
																											'email'=> $email,
																											'mot_de_passe'=>$mdp,	
																											'identification'=>$id1
																										]);
																	$_SESSION['pseudo']=$controle2['pseudo'];		
																	header('Location: gestionA.php');  
																										
																	}else{

																		echo'<div class="alert alert-danger fixed-bottom" role="alert">
																					le mot de saisie ne correspond pas à celui de la confirmation
																		</div>';
																											
																	

															}
																 }
																 else{

																	echo'<div class="alert alert-danger fixed-bottom" role="alert">
																		il exite déjà un utilisateur avec ce pseudo ou cette email 
																	</div>';
																										
																
													
															}
					}
					else{
						echo'<div class="alert alert-danger fixed-bottom" role="alert">
						votre email est invalide
						</div>';
					}
					
					}
					else{
						echo'<div class="alert alert-danger fixed-bottom" role="alert">
						votre speudo ne peut contenir que des caractères alphanumérique et _
						</div>';
				 }
				}
			} ?>	
</body>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>


</html>