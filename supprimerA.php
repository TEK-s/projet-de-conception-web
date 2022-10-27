<?php
include 'BDD.php';
global $db; 

if(isset($_POST['supprimerA']))
{
	$id=$_POST['supprimerA_id'];

	$data = $db->prepare(" DELETE  FROM utilisateur where id = :id");
	$data->execute(array('id'=>$id));
															 
	header('location: gestionA.php');
																											
																
				
				
			} ?>	


