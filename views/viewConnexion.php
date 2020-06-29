<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-accueil.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6005dc6b89.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dofight - Accueil</title>
</head>
<body>

    <img class="blob" src="img/blob.png" alt="">


    <header>
    <!-- <img src="../img/logo.png" alt="" class="logo">
    <nav>
        <ul class="nav-links">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Tournois</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <a href="#" class="cta"><button>Contact</button></a> -->
    <img src="img/logo.png" alt="" class="logo">
                  <nav>
                        <input type="checkbox" id="nav" class="hidden">
                        <label for="nav" class="nav-btn">
                              <i></i>
                              <i></i>
                              <i></i>
                        </label>
                        <div class="nav-wrapper">
                              <ul>
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="tournois.php">Tournois</a></li>
                                    <li><a href="#">Contact</a></li>
                              </ul>
                        </div>
                  </nav>
                <div class="container-button">
                <?php
		if(!isset($_SESSION['connect'])){ ?>
                  <a href="signup.php" class="cta"><button>Sign Up</button></a>
                  <a href="signin.php" class="cta2"><button>Sign In</button></a>
                  <?php } else { ?>
                    <p id="info">
			Bonjour <?= $_SESSION['pseudo'] ?><br>
			<a href="deconnexion.php">Déconnexion</a>
        </p>
        <?php } ?>
                  </div>
    </header>
    <main>
        <div class="section1">
            <div class="sectionrow">
                <div class="sectioncol1">
                
                    <div class="col1">
                    <h2>Lorem Ipsum</h2>
                    <p>blablablablablablablablablablablablablablablablablabla<br>
                    blablablablablablablablablablablablablablablablablabla<br>
                    blablablablablablablablablablablablablablablablablabla<br>
                    blablablablablablablablablablablablablablablablablabla</p>
                    <a href="#" class="btnS1"><button>Participer</button></a>
                    <a href="#" class="btnS1 two"><button>En savoir plus</button></a>
                    </div>
                </div>
                <div class="sectioncol2">
                <div class="col2">
                <img src="img/Award.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="wavesection1">
            <img src="img/waves1.png" alt="">
        </div>
        <div class="section2">
        <div class="heightS2">

        </div>
        <div class="sectionrow">
                <div class="sectioncol1">
                
                  
                </div>
                <div class="sectioncol2">
                <div class="col1s2">
                    <h2>Lorem Ipsum</h2>
                    <p>blablablablablablablablablablablablablablablablablabla<br>
                    blablablablablablablablablablablablablablablablablabla<br>
                    blablablablablablablablablablablablablablablablablabla<br>
                    blablablablablablablablablablablablablablablablablabla</p>
                    <br>
                    <a href="#" class="btnS1"><button>Participer</button></a>
                    <a href="#" class="btnS1 two"><button>En savoir plus</button></a>
                    </div>
                <div class="col2">

                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <!-- <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div> -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <script src="js.js" type="text/javascript"></script></body>
</html>