<?php


if(isset($_POST['ajoutV']))
{
    $nom=$_POST['nom'];
	$description=$_POST['description'];
	$image=$_FILES["image"]['name'];
	
}
function test_input($data){
	$data= trim($data);
	$data= stripslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}


if(isset($_POST['ajoutV'])){
		extract($_POST);
			if(!empty($nom) and !empty($description)){
			
				
						$nom= test_input($nom);
						$description=test_input($description);
						
															 $controle1 = $db->prepare(" SELECT nom FROM vaisseaux where nom = :nom ");
															 $controle1->execute([
																 
																 'nom'=> $nom
																 
															 ]);
	 
															
	 
																 $resultat1 = $controle1->rowCount();
																if(file_exists("image/".$_FILES['image']['name'])){
																	if(($resultat1 == 0) ){
																
																		$data = $db->prepare(" INSERT INTO vaisseaux(nom,description,image) VALUES(:nom,:description,:image)");
																										$data->execute([	
                                                                                                            'nom'=> $nom,
																											'description'=>$description,
																											'image'=>$image
																										]);
																		move_uploaded_file($_FILES['image']['name'], "image/".$_FILES['image']['name']);
																		
																
																
																 }
																 else{

																	echo'<div class="alert alert-danger" role="alert">
																		cette image existe
																	</div>';
															}
																}
																else{

																	echo'<div class="alert alert-danger" role="alert">
																	ce vaisseaux existe 
																	</div>';
															}
																 
				
				
				}
			} ?>	


