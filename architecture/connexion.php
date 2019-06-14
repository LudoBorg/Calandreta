<?php
//on actualise la session
session_start();
// Désactiver le rapport d'erreurs
error_reporting(0);
//On vérifie qu'elle soit bien définie
if(empty($_SESSION['user']) || empty($_SESSION['password']))
{
    header('Location: index.php');
    exit();
}
$con=mysqli_connect("calandremtrz.mysql.db", 'calandremtrz', 'jdEFN7amZ5em' ,"calandremtrz");
if(mysqli_connect_errno($con))
{
  echo "Erreur de connexion : ".mysqli_connect_error();
}
?>
