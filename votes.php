<?php
 include 'BDD.php';
 global $db;


if(isset($_POST['vote']))
{
	$note=$_POST['rating'];
	$user=$_POST['note2'];
	$film=$_POST['note1'];
  
	
}

if(isset($_POST['vote'])){
		extract($_POST);
			if(!empty($note)){
			
				
															 $controle1 = $db->prepare(" SELECT * FROM utilisateur where pseudo = :pseudo ");
															 $controle1->execute([
																 
																 'pseudo'=> $user
																 
															 ]);
														
															 
															 $resultat1 = $controle1->fetch(); 
														
															
															 $controle3= $db->prepare(" SELECT vote FROM votes where (id_utilisateur = :id_utilisateur and id_film = :id_film)");
															 $controle3->execute([
																 
																 'id_utilisateur'=> $resultat1['id'],
																 'id_film'=> $film,											 
															 ]);
	 
															 
																 $resultat2 = $controle3->rowCount();
																	if(($resultat2 == 0) ){
																		
																		$data = $db->prepare(" INSERT INTO votes(id_film,id_utilisateur,vote) VALUES(:id_film,:id_utilisateur,:vote)");
																										$data->execute([	
																											'id_film'=> $film,
                                                                                                            'id_utilisateur'=> $resultat1['id'],
                                                                                                            'vote'=> $note
																										]);
																
                                                                                                        header("refresh: ajout_votes.php");
																 }
																
				
				}
			} ?>	


