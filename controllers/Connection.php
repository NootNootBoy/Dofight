<?php

class Connection{

    private $mail, $mdp;
    
    function __construct($unmail, $unmdp)
    {
        $this->mail=$unmail;
        $this->mdp=$unmdp;
    }

    public function FuncConnexion(){

        session_start();

        if(isset($_SESSION['connect'])){
            header('location: accueil.php');
            exit();
        }

        if(!empty($this->mail) && !empty($this->mdp)){
            require('models/connectionBD.php');
            // VARIABLES
            $error      = 1;
           
            // CRYPTER LE PASSWORD
            $this->mdp = "aq1".sha1($this->mdp."1254")."25";
         
          $req = $db->prepare('SELECT * FROM users WHERE email = ?');
            $req->execute(array($this->mail));
       
            while($user = $req->fetch()){
       
                if($this->mdp == $user['password']){
                    $error = 0;
                    $_SESSION['connect'] = 1;
                    $_SESSION['pseudo']  = $user['pseudo'];
       
                    if(isset($_POST['connect'])) {
                        setcookie('log', $user['secret'], time() + 365*24*3600, '/', null, false, true);
                    }
       
                    // header('location: index.php?success=1');
                    require_once("views/viewConnexion.php");
                    exit();
                }
       
            }
       
            if($error == 1){
                header('location: index.php?error=1');
                exit();
            }
       
        }

    }
}