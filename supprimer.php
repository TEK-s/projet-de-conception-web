<?php
include 'BDD.php';
global $db; 

if(isset($_POST['supprimer']))
{
	$id=$_POST['supprimer_id'];

	$data = $db->prepare(" DELETE  FROM personnage where id = :id");
	$data->execute(array('id'=>$id));
															 
	header('location: gestionP.php');
																											
																
				
				
			} ?>	


