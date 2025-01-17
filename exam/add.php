<?php

session_start();

if($_POST){
    if(isset($_POST['nom']) && !empty($_POST['nom'])
    && isset($_POST['prenom']) && !empty($_POST['nom'])
    && isset($_POST['phone']) && !empty($_POST['nombre'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['message']) && !empty($_POST['message'])){
        // On inclut la connexion à la base
        require_once('connect.php');

        // On nettoie les données envoyées
        $nom = strip_tags($_POST['nom']);
        $prénom = strip_tags($_POST['prénom']);
        $email = strip_tags($_POST['email']);
        $téléphone = strip_tags($_POST[`téléphone`]);
        $message = strip_tags($_POST[`message`]);

        $sql = 'INSERT INTO `liste` (`nom`,`prénom`, `email`, `téléphone`, `message` ) VALUES (:nom, :prénom, :email, :téléphone, :message);';

        $query = $db->prepare($sql);

        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prénom', $prénom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':téléphone', $téléphone, PDO::PARAM_INT);
        $query->bindValue(':message', $message, PDO::PARAM_STR);

        $query->execute();

        $_SESSION['message'] = "donnée envoyée";
        require_once('close.php');

        header('Location: index.html');
    }else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

if(!empty($_SESSION['erreur'])){
    echo '<div class="alert alert-danger" role="alert">
            '. $_SESSION['erreur'].'
        </div>';
    $_SESSION['erreur'] = "";
}
?>

