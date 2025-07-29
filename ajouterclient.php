<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Resultat.php" method="post">
<input type="text"name="matriculee"value="<?php echo $_POST["matricule"] ;?>">
<button>valider</button>
    </form>
</body>
</html>
<?php
$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$marque=$_POST["marque"];
$matricule=$_POST["matricule"];
$numserie=$_POST["numserie"];
 $service=$_POST["service"];
$date=$_POST["date"];
$heure=$_POST["heure"];
$servernam="localhost";//des variable nesecaire pore la connexion avec la basse de donné
$password='';
$username="root";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//por permettre a php daceder a la base de doné basse 1
if(!$con){
die("probléme de connexion".mysqli_connect_error());
}
$sql="INSERT INTO informa(id,Nom,Prenom,Tel,
	email,Marque,Matricule,Numeroserie,service,date,heure) VALUES ('$id','$nom','$prenom','$tel','$email','$marque','$matricule','$numserie','$service','$date','$heure')";
if(mysqli_query($con,$sql)){
    header("Location:index.php?id=$id");
 }else{
  echo "erreure l'heure de linsertion".mysqli_error($con);
     mysqli_close($con);
 }


?>	
