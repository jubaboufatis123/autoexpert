<?php
$marq=$_POST["nut"];
$matr=$_POST["mdp"];
$rmdp = $_POST["rmdp"];
$servernam="localhost";//des variable nesecaire pore la connexion avec la basse de donné
$password='';
$username="root";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//por permettre a php daceder a la base de doné basse 1
if(!$con){
    die("probléme de connexion".mysqli_connect_error());}


    if($matr !== $rmdp){ //vérifie si les deux mots de passe sont identiques
        header('location:inscription.php?erreur=true'); //redirige vers inscription.php avec le paramètre d'erreur err=1
        exit();
        }
        else{
            $query = "SELECT * FROM inscription WHERE nom='".$marq."' and motdepass='".$matr."'";
            $result = mysqli_query($con,$query);
            $count = mysqli_num_rows($result);
            
            if($count > 0) {
            header('location:inscription.php?erreur1=true');
            exit();
            }
         else{
$sql="INSERT INTO inscription(nom,motdepass) VALUES ('$marq','$matr')";

if(mysqli_query($con,$sql)){
   
    header("location:index.php");

}else{
    echo "erreure loure de linsertion".mysqli_error($con);
    mysqli_close($con);

}
        }
    }
?>	
