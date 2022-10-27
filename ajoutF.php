<?php


if(isset($_POST['ajoutF']))
{
    $nom=$_POST['nom'];
    $auteur=$_POST['auteur'];
    $date_rel=$_POST['date_rel'];
	$description=$_POST['description'];
	$image=$_FILES["image"]['name'];
	
}
function test_input($data){
	$data= trim($data);
	$data= stripslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}


if(isset($_POST['ajoutF'])){
		extract($_POST);
			if(!empty($nom) and !empty( $auteur) and !empty($date_rel) and !empty($description)){
			
				
						$nom= test_input($nom);
						$auteur= test_input($auteur);
						$date_rel= test_input($date_rel);
						$description=test_input($description);
						
															 $controle1 = $db->prepare(" SELECT nom FROM film where nom = :nom ");
															 $controle1->execute([
																 
																 'nom'=> $nom
																 
															 ]);
	 
															
	 
																 $resultat1 = $controle1->rowCount();
																if(file_exists("image/".$_FILES['image']['name'])){
																	if(($resultat1 == 0) ){
																
																		$data = $db->prepare(" INSERT INTO film(nom,auteur,date_rel,description,image) VALUES(:nom,:auteur,:date_rel,:description,:image)");
																										$data->execute([	
                                                                                                            'nom'=> $nom,
                                                                                                            'auteur'=> $auteur,
                                                                                                            'date_rel'=> $date_rel,
																											'description'=>$description,
																											'image'=>$image
																										]);
																		move_uploaded_file($_FILES['image']['name'], "image/".$_FILES['image']['name']);
																		
																
																
																 }
																 else{

																	echo'<div class="alert alert-danger" role="alert">
																		ce film existe
																	</div>';
															}
																}
																else{

																	echo'<div class="alert alert-danger" role="alert">
																	cette film existe 
																	</div>';
															}
																 
				
				
				}
			} ?>	


