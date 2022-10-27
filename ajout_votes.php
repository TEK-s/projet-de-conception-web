<?php include 'BDD.php';
global $db;






if(isset($_POST['vote'])){
		extract($_POST);
			
			
	$note=$_POST['rating'];
	$film=$_POST['film'];
	$utilisateur=$_POST['utilisateur'];
	
				
										
																		
			$data = $db->prepare(" INSERT INTO votes(id_film,id_utilisateur,vote) VALUES(:id_film,:id_utilisateur,:vote)");
				$data->execute([	
						'id_film'=> $film,
                        'id_utilisateur'=> $utilisateur,
                    	'vote'=> $note
						]);
						header('location: vote.php');
				
																 } ?>	


