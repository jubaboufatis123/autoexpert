
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Resultat</title>
	<link rel="stylesheet"href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
	<body>
		<?php
$id=(int)$_GET["id"];
$servernam="localhost";
$username="root";
$password="";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//permettre aux php dacceder a abase de donné
if(!$con){
	die("probléme de connexion".mysqli_connect_error());
}
$sql="SELECT Nom,Prenom,Tel,email,Marque,Matricule,Numeroserie,service,date,heure
 FROM informa WHERE id=$id";//requet sql
$result=mysqli_query($con,$sql);//2 paramétreconnexion et requet
if(mysqli_num_rows($result)!=0){//si il ya plusieure enregistrement de méme pane
	while($row=mysqli_fetch_assoc($result)){
?>
		<table class="table table-hover">
		<tr><td>nom</td><td><?php echo $row["Nom"]; ?></td></tr>
		<tr><td>prenom</td><td><?php echo $row["Prenom"]; ; ?></td></tr>
		<tr><td>tel</td><td><?php echo $row["Tel"] ?></td></tr>
		<tr><td>email</td><td><?php echo $row["email"]; ?></td></tr>
		<tr><td>marque</td><td><?php echo $row["Marque"]; ?></td></tr>
		<tr><td>matricule</td><td><?php echo $row["Matricule"]; ?></td></tr>
		<tr><td>numero serie</td><td><?php echo $row["Numeroserie"]; ?></td></tr>
		<tr><td>service</td><td><?php echo $row["service"]; ?></td></tr>
		<tr><td>date</td><td><?php echo $row["date"]; ?></td></tr>
		<tr><td>heure</td><td><?php echo $row["heure"]; ?></td></tr>
		
		<?php
		
	
	}

}

else{
	echo "aucun rendez vous reservez";

}
mysqli_close($con);
?>
	
	</table>
	<button class="retour"><a class="annul" href="index.php?id=<?php echo $id; ?>">Retour</a></button>
	<input type="button" class="btn btn-success hidden-print" onclick="print()" value="Imprimer" />
	</body>
	<script src="js/bootstrap.min.js"></script>
</html>




