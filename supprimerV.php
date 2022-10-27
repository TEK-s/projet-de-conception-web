<?php
include 'BDD.php';
global $db; 

if(isset($_POST['supprimerV']))
{
	$id=$_POST['supprimerV_id'];

	$data = $db->prepare(" DELETE  FROM vaisseaux where id = :id");
	$data->execute(array('id'=>$id));
															 
	header('location: gestionV.php');
																											
																
				
				
			} ?>	


