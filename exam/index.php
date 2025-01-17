<?php
// On démarre une session
session_start();

// On inclut la connexion à la base
require_once('connect.php');

$sql = 'SELECT * FROM `liste`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link rel="stylesheet" href="./style/style.css">
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
            <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
                        $_SESSION['erreur'] = "";
                    }
                ?>
                <?php
                    if(!empty($_SESSION['message'])){
                        echo '<div class="alert alert-success" role="alert">
                                '. $_SESSION['message'].'
                            </div>';
                        $_SESSION['message'] = "";
                    }
                ?>
                <div class="contact-form-container">
                <h2>Formulaire de Contact</h2>
                <form action="add.php" method="$_POST">
                    <input type="text" id="nom" name="nom" placeholder="Nom" required >
                    
                    <input type="text" id="nom" name="nom" placeholder="Prénom" required>
                    
                    <input type="tel" id="tel" name="tel" placeholder="Téléphone" required>
                    
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    
                    <textarea id="message" name="message" placeholder="Message" required></textarea>
                    
                    <button type="submit" class="submit-btn">Envoyer</button>
                </form>
            </div>
            </section>
        </div>
    </main>
</body>
</html>