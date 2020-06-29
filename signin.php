<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6005dc6b89.js" crossorigin="anonymous"></script>
    <title>Login Screen</title>
</head>
<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
    <?php
		if(!isset($_SESSION['connect'])){ ?>
        <div class="img">
            <img src="img/Login.svg" alt="">
        </div>
        <div class="login-container">
            <form action="index.php?action=connection" method="post">
                <img class="avatar" src="img/Avatar.svg" alt="">
                <h2>Bienvenue</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
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
                <a href="signup.php">déja un compte?</a>
                <input type="submit" class="btn" value="se connecter">
            </form>
            <?php } else { ?>
		
		<p id="info">
			Bonjour <?= $_SESSION['pseudo'] ?><br>
			<a href="deconnexion.php">Déconnexion</a>
		</p>

		<?php } ?>
        </div>
    </div>

    <script type="text/javascript" src="app.js"></script>

</body>
</html>