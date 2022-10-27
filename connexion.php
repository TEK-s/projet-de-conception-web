<?php session_start();
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
<?php include 'navigation.php'; ?>
<body>
	
	<div class="login-container d-flex align-items-center justify-content-center">
		<form class="inscription-form text-center" method="POST">
			<h1 class="mb-5 font-weight-light text-uppercase">Connexion</h1>
			
			<div class="form-group">
				<input type="email" class="form-control" name="email" id="email"   placeholder="email" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe"  placeholder="mot de passe" required>
			</div>
			<button type="submit" name="formsend" id="formsend" class="btn btn-primary btn-block"> connexion</button>
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
			if(!empty($mot_de_passe)  and !empty($email)){
					if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
						$email= test_input($email);
						$mot_de_passe= test_input($mot_de_passe);
	 
						include 'BDD.php';
													 global $db; 
															 $controle1 = $db->prepare(" SELECT * FROM utilisateur where email = :email ");
															 $controle1->execute([
																 
																 'email'=> $email
																 
															 ]);
	 
	 
																 $resultat1 = $controle1->fetch();
																 if($resultat1 == true){
																	if(password_verify($mot_de_passe, $resultat1['mot_de_passe'])){
																		
																		$_SESSION['pseudo']=$resultat1['pseudo'];
																	header('Location: index.php');  
																										
																	}else{

																		echo'<div class="alert alert-danger fixed-bottom text-center" role="alert">
																					le mot de saisie est invalide
																		</div>';
																		
															}
																 }
																 else{

																	echo'<div class="alert alert-danger fixed-bottom text-center" role="alert">
																		veillez vérifier votre email. 
																	</div>';
																							
																
													
															}
					}
					else{
						echo'<div class="alert alert-danger fixed-bottom text-center" role="alert">
						votre email est invalide
						</div>';
					}
				}
			} ?>	
</body>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>


</html>