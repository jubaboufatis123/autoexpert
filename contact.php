<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title> document</title>
        <link rel="stylesheet" href="style3.css">
        
    </head>
    <body>
    

<?php 
$id=$_GET["id"];

?>
        <div class="contact-section">
            <div class="contact-info">
                    <div class="locale" ><img class="localisation" src="location-dot-solid.svg" >Tizi-Ouzo Ouadhia </div>
                    <div class="adresse"><img class="ad" src="at-solid.svg">AutoExpert@gmail.com </div>
                    <div class="portable"><img class="phone" src="phone-solid.svg"> 0557 89 32 00 </div>
                    <div class="heure"><img class="clock"src="clock-solid.svg">8am to 17:00pm</div>
            </div>
            <div class="contact-form">
                <h2><u> CONTACT US</u></h2>
                <form  method="post"action="ajoutercontact.php">
                    <input type="text" name="name" class="text-box" placeholder="your name" required>
                    <input type="email" name="email" class="text-box" placeholder="your email" required></br>
                   

                <div class="deux">
                <input type="text" name="message" class="message"placeholder="saisir le message..">
                <input type="hidden"name="id" value="<?php  echo $id;?>">
                </div>
                 <div >
                    <input type="submit" name="submit" class="send-btn" value="Envoyer">
              
                </div>
                
                </form>
   
               
            </div>
      </div>
   
    </body>
</html> 

