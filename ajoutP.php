<?php


if(isset($_POST['formsend']))
{
    $nom=$_POST['nom'];
    $espece=$_POST['espece'];
    $date_naiss=$_POST['date_naiss'];
    $date_mort=$_POST['date_deces'];
    $sexe=$_POST['sexe'];
    $taille=$_POST['taille'];
	$description=$_POST['description'];
	$image=$_FILES["image"]['name'];
	
}
function test_input($data){
	$data= trim($data);
	$data= stripslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}


if(isset($_POST['formsend'])){
		extract($_POST);
			if(!empty($nom) and !empty( $espece) and !empty($date_naiss) and !empty($date_mort) and !empty($sexe)and !empty($taille) and !empty($description)){
			
				
						$nom= test_input($nom);
						$espece= test_input($espece);
						$date_naiss= test_input($date_naiss);
						$date_mort = test_input($date_mort);
                        $sexe=test_input($sexe);
                        $taille=test_input($taille);
						$description=test_input($description);
						
															 $controle1 = $db->prepare(" SELECT nom FROM personnage where nom = :nom ");
															 $controle1->execute([
																 
																 'nom'=> $nom
																 
															 ]);
	 
															
	 
																 $resultat1 = $controle1->rowCount();
																if(file_exists("image/".$_FILES['image']['name'])){
																	if(($resultat1 == 0) ){
																
																		$data = $db->prepare(" INSERT INTO personnage(nom,espece,date_naiss,date_deces,sexe,taille,description,image) VALUES(:nom,:espece,:date_naiss,:date_deces,:sexe,:taille,:description,:image)");
																										$data->execute([	
                                                                                                            'nom'=> $nom,
                                                                                                            'espece'=> $espece,
                                                                                                            'date_naiss'=> $date_naiss,
                                                                                                            'date_deces' => $date_deces,
                                                                                                            'sexe'=>$sexe,
                                                                                                            'taille'=>$taille,
																											'description'=>$description,
																											'image'=>$image,
																										]);
																		move_uploaded_file($_FILES['image']['name'], "image/".$_FILES['image']['name']);
																		
																
																
																 }
																 else{

																	echo'<div class="alert alert-danger" role="alert">
																		ce personnage existe
																	</div>';
															}
																}
																else{

																	echo'<div class="alert alert-danger" role="alert">
																	cette image existe 
																	</div>';
															}
																 
				
				
				}
			} ?>	


