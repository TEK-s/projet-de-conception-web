<?php
include 'BDD.php';
global $db; 

if(isset($_POST['supprimerF']))
{
	$id=$_POST['supprimerF_id'];

	$data = $db->prepare(" DELETE  FROM film where id = :id");
	$data->execute(array('id'=>$id));
															 
	header('location: gestionF.php');
																											
																
				
				
			} ?>	


