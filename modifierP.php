<?php
include 'BDD.php';
global $db; 

if(isset($_POST['valider']))
{
	$id=$_POST['modifier_id'];
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


if(isset($_POST['valider'])){
		extract($_POST);

			if(!empty($nom) and !empty( $espece) and !empty($date_naiss) and !empty($date_mort) and !empty($sexe)and !empty($taille) and !empty($description)){
				
				
						$nom= test_input($nom);
						$espece= test_input($espece);
						$date_naiss= test_input($date_naiss);
						$date_mort = test_input($date_mort);
                        $sexe=test_input($sexe);
                        $taille=test_input($taille);
						$description=test_input($description);
						
															 
															
	 
																
																if(file_exists("image/".$_FILES['image']['name'])){
																
																		$data = $db->prepare(" UPDATE personnage SET nom=:nom , espece=:espece , date_naiss=:date_naiss , date_deces=:date_deces , sexe=:sexe , taille=:taille , description=:description, image=:image where id = :id");
																										$data->execute(array(
                                                                                                            'nom'=>$nom,
                                                                                                            'espece'=>$espece,
                                                                                                            'date_naiss'=>$date_naiss,
                                                                                                            'date_deces' => $date_deces,
                                                                                                            'sexe'=>$sexe,
																											'taille'=>$taille,
																											'image'=>$image,
																											'description'=>$description,
																											'id'=>$id
																										));
																		move_uploaded_file($_FILES['image']['name'], "image/".$_FILES['image']['name']);
																		header('location: gestionP.php');
																											
																
															
																}
																else{

																	echo'<div class="alert alert-danger" role="alert">
																	cette image existe pas
																	</div>';
															}
																 
				
				
				}
			} ?>	


