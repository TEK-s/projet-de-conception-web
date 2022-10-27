<?php
include 'BDD.php';
global $db; 

if(isset($_POST['validerF']))
{
	$id=$_POST['modifierF_id'];
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


if(isset($_POST['validerF'])){
		extract($_POST);

			if(!empty($nom) and !empty( $auteur) and !empty($date_rel) and !empty($description)){
				
				
						$nom= test_input($nom);
						$auteur= test_input($auteur);
						$date_rel= test_input($date_rel);
						$description=test_input($description);
						
															 
															
	 
																
																if(file_exists("image/".$_FILES['image']['name'])){
																
																		$data = $db->prepare(" UPDATE film SET nom=:nom , auteur=:auteur , date_rel=:date_rel , description=:description, image=:image where id = :id");
																										$data->execute(array(
                                                                                                            'nom'=>$nom,
                                                                                                            'auteur'=>$auteur,
                                                                                                            'date_rel'=>$date_rel,
																											'image'=>$image,
																											'description'=>$description,
																											'id'=>$id
																										));
																		move_uploaded_file($_FILES['image']['name'], "image/".$_FILES['image']['name']);
																		header('location: gestionF.php');
																											
																
															
																}
																else{

																	echo'<div class="alert alert-danger" role="alert">
																	cette image existe pas
																	</div>';
															}
																 
				
				
				}
			} ?>	


