<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-inscription.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6005dc6b89.js" crossorigin="anonymous"></script>
    <title>Login Screen</title>
</head>
<body>
    <img class="wave" src="img/wave.png">
   
    <div class="container">
    <?php
		if(!isset($_SESSION['connect'])){ ?>
        <!-- <div class="img">
            <img src="img/Login.svg" alt="">
        </div> -->
        <div class="login-container">
            <form action="index.php?action=inscription" method="post">
                <img class="avatar" src="img/Avatar.svg" alt="">
                <h2>Bienvenue</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Pseudo</h5>
                        <input type="text" class="input" name="pseudo">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input type="text" class="input" name="email">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password confirm</h5>
                        <input type="password" class="input" name="passwordconfirm">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Votre Classe</h5>
                        <input type="text" class="input" name="classe">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Votre Level</h5>
                        <input type="text" class="input" name="niveau">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Votre Guilde</h5>
                        <input type="text" class="input" name="guilde">
                    </div>
                </div>
                <!-- <input type="hidden" class="contactFormText" id="token" name="token" /> -->
                <a href="">déja un compte?</a>
                <input type="submit" class="btn" value="se connecter">
            </form>
            <?php
		 
         if(isset($_GET['error'])){
      
             if(isset($_GET['pass'])){
                 echo '<p id="error">Les mots de passe ne correspondent pas.</p>';
             }
             else if(isset($_GET['email'])){
                 echo '<p id="error">Cette adresse email est déjà utilisée.</p>';
             }
         }
         else if(isset($_GET['success'])){
             echo '<p id="success">Inscription prise correctement en compte.</p>';
         }
      
     ?>
            <?php } else { ?>
		
		<p id="info">
			Bonjour <?= $_SESSION['pseudo'] ?><br>
			<a href="deconnexion.php">Déconnexion</a>
		</p>

		<?php } ?>
        
        </div>
    </div>

    <script type="text/javascript" src="app.js"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LcSGOYUAAAAAIRIyPvBSPfwGviIROi8xvBru63S"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LcSGOYUAAAAAIRIyPvBSPfwGviIROi8xvBru63S', {action: 'homepage'}).then(function(token) {
       console.log(" token : " + token);
       document.getElementById("token").value = token;
    });
});
</script> -->
</body>
</html>