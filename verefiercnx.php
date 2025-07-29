<?php
session_start();
$user=$_POST["username"];
$mod=$_POST["mdp"];
$servernam="localhost";
$username="root";
$password="";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);
if(!$con){
die("problème de connexion".mysqli_connect_error());
}
$sql="SELECT nom,motdepass FROM inscription WHERE nom='$user'AND motdepass='$mod' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0){
header('Location: connexion.php?erreur=true');
exit();
} else{
$_SESSION['connecte'] = true;
$_SESSION['username'] = $_POST["username"];

header("Location: index.php?nom=$user&mdp=$mod");
exit();
}
mysqli_close($con);
?>