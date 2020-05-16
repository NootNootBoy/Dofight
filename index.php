<?php

require_once("controllers/Inscription.php");
require_once("controllers/Connection.php");
require('models/connectionBD.php');

 $Inscription = new Inscription($_POST['pseudo'], $_POST['email'], $_POST['password'],
 $_POST['passwordconfirm'], $_POST['classe'], $_POST['niveau'], $_POST['guilde']);

$Connection = new Connection($_POST['email'], $_POST['password']);


if (isset($_GET['action'])) {
    if ($_GET['action'] == "inscription") {
 
        $Inscription->inscription();

    }
        else if($_GET['action'] == "connection"){
        
            $Connection->FuncConnexion();

    }
    else{
        echo "wtf";
    }
}


if(isset($_GET['error'])){
    echo'<p id="error">Nous ne pouvons pas vous authentifier.</p>';
}
else if(isset($_GET['success'])){
    echo'<p id="success">Vous êtes maintenant connecté.</p>';
}



