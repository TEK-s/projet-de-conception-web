<?php
session_start();
if(isset($_GET['deconnexion'])){
    session_unset();
    session_destroy();
    header('Location: index.php');
}

?>