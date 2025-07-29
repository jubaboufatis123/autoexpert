

<?php

    $nom=$_POST["name"];

$id=$_POST["id"];
    $email=$_POST["email"];


    $message=$_POST["message"];

$servernam="localhost";//des variable nesecaire pore la connexion avec la basse de donné
$password='';
$username="root";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//por permettre a php daceder a la base de doné basse 1
if(!$con){
die("probléme de connexion".mysqli_connect_error());}

else{ 
    $sql="INSERT INTO contact(nom,email,message) VALUES ('$nom','$email','$message')";
    if(mysqli_query($con,$sql)){
       
        header("location:index.php?id=$id");
    
    }else{
        echo "erreure loure de linsertion".mysqli_error($con);
        mysqli_close($con);
    
    }
            }
       


mysqli_close($con);

?>	




