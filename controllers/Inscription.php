<?php


class Inscription
    {
        
        private $pseudo, $mail, $mdp, $mdpconfirm, $classe, $niveau, $guilde;

        function __construct($unpseudo, $unmail, $unmdp, $unmdpconfirm, $uneclasse, $unniveau, $uneguilde)
        {
            $this->pseudo=$unpseudo;
            $this->mail=$unmail;
            $this->mdp=$unmdp;
            $this->mdpconfirm=$unmdpconfirm;
            $this->classe=$uneclasse;
            $this->niveau=$unniveau;
            $this->guilde=$uneguilde;
        }

        public function inscription(){


            $this->checkPseudo();
            $this->checkMail();
            $this->verifyPassword();
            if($this->checkPseudo() && $this->checkMail() && $this->verifyPassword()){
                // HASH
            $secret = sha1( $this->mail).time();
            $secret = sha1($secret).time().time();
    
            // CRYPTAGE DU PASSWORD
            $password = "aq1".sha1($this->mdp."1254")."25";
    
            // ENVOI DE LA REQUETE
            require('models/connectionBD.php');
            $req = $db->prepare("INSERT INTO users(pseudo, email, password, secret, classe, niveau, guilde) VALUES(?,?,?,?,?,?,?)");
            $value = $req->execute(array($this->pseudo, $this->mail, $password, $secret, $this->classe, $this->niveau, $this->guilde));
                
            // header('location: index.php?success=1');
            require_once("views/viewConnexion.php");
            exit();
                }
            }

        
        private function checkPseudo() {

            if(strlen($this->pseudo) >= 3 && strlen($this->pseudo) <= 16){
            echo 'ok ';
            return true;
            }
            else{
                echo "no";
                return false;
            }
        }
    
        private function checkMail() {

            require('models/connectionBD.php');
            if(filter_var($this->mail, FILTER_VALIDATE_EMAIL)){
                $req = $db->prepare("SELECT count(*) as numberEmail FROM users WHERE email = ?");
                $req->execute(array($this->mail));

                while($email_verification = $req->fetch()){
                    if($email_verification['numberEmail'] != 0) {
                        header('location: index.php?error=1&email=1');
                        exit();
                    }
                }
                return true;
                }
                else{
                    echo "no";
                    exit;
                }
        }
    
        private function verifyPassword(){
    
            if($this->mdp != $this->mdpconfirm){
                header('Location: index.php?error=1&pass=1');
                    exit();
        
            }
            else{

                return true;
            }
    
        }
          


    }


