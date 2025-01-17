<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link rel="stylesheet" href="./style/style.css">
<body>
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
