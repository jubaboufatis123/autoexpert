<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>page admin</title>
  <style>
    .deconx{
      display: flex;
      justify-content:flex-end;
      background-color:red;
      color:blue;
    }
    .deconx:hover{
      background-color:green;
      color:red;
    }
  </style>
</head>
<html>
<body>
<?php
session_start();
// vérifier si l'utilisateur est connecté
if (isset($_SESSION['connecte']) && $_SESSION['connecte'] == true) {
	
	echo  "<button >connecté</button>";
	echo '<button class="deconx"><a class="conn" href="deconnexionadmin.php">Déconnexion</a></button>';
}?>
<?php
$servernam="localhost";
$username="root";
$password="";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//permettre aux php dacceder a abase de donné
if(!$con){
	die("probléme de connexion".mysqli_connect_error());
}
$sql="SELECT Nom,Prenom,Tel,email,Marque,Matricule,Numeroserie,service,date,heure
 FROM informa ";//requet sql
$result=mysqli_query($con,$sql);//2 paramétreconnexion et requet
if(mysqli_num_rows($result)>0){//si il ya plusieure enregistrement de méme pane
?>
<table class="table table-hover">
<thead>
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Email</th>
<th>Marque</th>
<th>Matricule</th>
<th>Numéro de série</th>
<th>Service</th>
<th>Date</th>
<th>Heure</th>
<th>option</th>
</tr>
</thead>
<tbody>
<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row["Nom"]; ?></td>
<td><?php echo $row["Prenom"] ; ?></td>
<td><?php echo $row["Tel"] ;?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["Marque"]; ?></td>
<td><?php echo $row["Matricule"]; ?></td>
<td><?php echo $row["Numeroserie"]; ?></td>
<td><?php echo $row["service"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["heure"]; ?></td>
<td><a href="supprimerdv.php?matricule=<?php echo $row["Matricule"];?>">suprimer</a></td>
</tr>
<?php } ?>
</tbody>
</table>

<?php

}

else{
	echo "zeror esultat";
	echo $matricule;
}
mysqli_close($con);

?>
<?php
$servernam="localhost";
$username="root";
$password="";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//permettre aux php dacceder a abase de donné
if(!$con){
	die("probléme de connexion".mysqli_connect_error());
}
$sql="SELECT nom,email,message FROM contact ";//requet sql
$resulte=mysqli_query($con,$sql);//2 paramétreconnexion et requet
if(mysqli_num_rows($resulte)>0){//si il ya plusieure enregistrement de méme pane
?>
<table class="table table-hover">
<thead>
<tr>
<th>Nom</th>
<th>  Email</th>
<th>Message</th>
</tr>
</thead>
<tbody>
<?php while($row=mysqli_fetch_assoc($resulte)){ ?>
<tr>
<td><?php echo $row["nom"]; ?></td>
<td><?php echo $row["email"] ; ?></td>
<td><?php echo $row["message"] ;?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php

}

else{
	echo "zeror esultat";
	echo $matricule;
}
mysqli_close($con);

?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


