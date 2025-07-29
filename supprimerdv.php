<?php
$matricule=$_GET["matricule"];
$servernam="localhost";//des variable nesecaire pore la connexion avec la basse de donné
$password="";
$username="root";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//por permettre a php daceder a la base de doné basse 1
if(!$con){
    die("probléme de connexion".mysqli_connect_error());}
    $sql = "DELETE FROM informa WHERE Matricule='$matricule'"; // requête SQL pour supprimer le rendez-vous correspondant
    if(mysqli_query($con,$sql)){
        header("location:admin.php");
    }
    mysqli_close($con);

?>