<?php
include 'BDD.php';
global $db; 

if(isset($_POST['validerV']))
{
	$id=$_POST['modifierV_id'];
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


if(isset($_POST['validerV'])){
		extract($_POST);

			if(!empty($nom) and !empty($description)){
				
				
						$nom= test_input($nom);
						$auteur= test_input($auteur);
						$date_rel= test_input($date_rel);
						$description=test_input($description);
						
															 
															
	 
																
																if(file_exists("image/".$_FILES['image']['name'])){
																
																		$data = $db->prepare(" UPDATE vaisseaux SET nom=:nom ,description=:description, image=:image where id = :id");
																										$data->execute(array(
                                                                                                            'nom'=>$nom,
																											'image'=>$image,
																											'description'=>$description,
																											'id'=>$id
																										));
																		move_uploaded_file($_FILES['image']['name'], "image/".$_FILES['image']['name']);
																		header('location: gestionV.php');
																											
																
															
																}
																else{

																	echo'<div class="alert alert-danger" role="alert">
																	cette image existe pas
																	</div>';
															}
																 
				
				
				}
			} ?>	


