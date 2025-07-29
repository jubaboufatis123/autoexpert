<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Page de paiement</title>
    <link rel="stylesheet" href="paiment.css">
  </head>
  <body>
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
$heure=$_POST["heure"];?>
    <h1><u>Procéder au Paiement</u></h1>
    <form method="post"action="ajouterclient.php">
      <h2>Mode de paiement en ligne</h2>
      <label for="card-number">Numéro de carte de crédit :</label>
      <input type="text" id="card-number" name="card-number" required>
      <label for="expiry-date">Date d'expiration :</label>
      <input type="month" id="expiry-date" name="expiry-date" required>
      <label for="cds">Code de sécurité :</label>
      <input type="password" id="cds" name="cds" required>
      <input type="hidden" name="nom" value="<?php echo $nom; ?>">
<input type="hidden" name="prenom" value="<?php echo $prenom; ?>">
<input type="hidden" name="tel" value="<?php echo $tel; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="marque" value="<?php echo $marque; ?>">
<input type="hidden" name="matricule" value="<?php echo $matricule; ?>">
<input type="hidden" name="numserie"value="<?php echo $numserie; ?>">
<input type="hidden" name="service" value="<?php echo $service; ?>">
<input type="hidden" name="date" value="<?php echo $date; ?>">
<input type="hidden" name="heure" value="<?php echo $heure; ?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">
     <input type="submit" value="confirmer">
     <button class="Annuler1"><a class="annuler" href="index.php?id=<?php echo $id; ?>">Annuler</a></button>
    </form>
    <style>
.Annuler1{
  position: relative;
  background-color: red;
  border: none;
  border-radius: 4px;
  margin-left: 320px;
  height: 37px;
  left: 100px;
  top:-37px;
}
a{
  text-decoration: none;
  color: white;
}
      </style>
    <script src="controle.js"></script>
  </body>
 
</html> 