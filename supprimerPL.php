<?php
include 'BDD.php';
global $db; 

if(isset($_POST['supprimerPL']))
{
	echo'12';
	$id=$_POST['supprimerPL_id'];

	$data = $db->prepare(" DELETE  FROM planete where id = :id");
	$data->execute(array('id'=>$id));
															 
	header('location: gestionPL.php');
																											
																
					
} ?>	


