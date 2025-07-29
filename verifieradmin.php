<?php
session_start();
$id=$_POST["id"];
$mdp=$_POST["mdp"];
$servernam="localhost";
$username="root";
$password="";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);
if(!$con){
die("problème de connexion".mysqli_connect_error());
}
$sql="SELECT nom,motdepass FROM admin WHERE nom='$id'AND motdepass='$mdp' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0){
header('Location: authentificationadmin.php?erreur=true');
exit();
} else{
$_SESSION['connecte'] = true;
$_SESSION['username'] = $_POST["id"];
header('Location: admin.php');
exit();
}
mysqli_close($con);

?>


