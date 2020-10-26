<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Selection</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
        /* Reset all Styles */
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Indie Flower', cursive;
        }
        /* Stylizing Globale */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #0377fc;
            font-size: 36px;
        }
        /* Selecteur multiple */
        select, input {
            font-size: 24px;
            padding: 9px 18px;
        }
        /* Selecteur Titre */
        h1 {
            font-size: 50px;
        }
        form {
            margin: calc(100vh - 80vh) 0;
        }
        /* Classes */
        .respond {
            background-color: green;
            padding: 10px 25px;
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 0 0 15px black; 
            color: white;
        }
        .error {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Exercice PHP - Veuillez choisir une ville :</h1>
    <!-- Ajout du formulaire avec la methode post pour eviter d'afficher le lien dans l'url -->
    <form method="post">
        <label for="villeLabel">Sélectionner une ville :</label>
        <!-- ID Pour le label; Name: Permettant de récupérer la data dans le tableau Post -->
        <select name="ville" id="villeLabel">
            <!-- Juste un groupe pour biens que ce sont des noms de villes .. -->
            <optgroup label="Villes :">
                <!-- Juste option de sélection invisible et autres parametre -->
                <option selected disabled hidden>Choissiez une ville !</option>
                <option value="Paris">Paris</option>
                <option value="Berlin">Berlin</option>
                <option value="Mouscou">Mouscou</option>
            </optgroup>
        </select>
        <!-- Bouton d'envoi de Formulaire -->
        <input type="submit" value="Envoyer la réponse">
    </form>

    <?php
        // Stockage de variables pour des contenus récurrentes
        $startPara = '<p class="respond">';
        $endPara = '</p>';
        $startPhrase = 'La ville de ';
        $endPhrase = ' est la capitale de la ';
        // Condition SI : La variable POST est vide alors fait cela SINON ...
        if (empty($_POST)) {
            echo ('<p class="respond error">' . "Veuillez faire un choix !" . $endPara);
        }
        else {
            // Récuperation et stockage de la variable Super-Globale 
            $ville = $_POST["ville"];
            // Conditions pour chaques cas faire ...
            switch ($ville) {
                case 'Paris':
                    echo($startPara . $startPhrase . $ville . $endPhrase . 'France' . $endPara);
                    break;
                case 'Berlin':
                    echo($startPara . $startPhrase . $ville . $endPhrase . 'Allemagne' . $endPara);
                    break;
                case 'Mouscou':
                    echo($startPara . $startPhrase . $ville . $endPhrase . 'Russie' . $endPara);
                    break;
                // SI aucun des cas de ces derniers énumérées alors afficher  
                default:
                    echo('<p class="respond error">'."Erreur inconnue !".$endPara);
                    break;
            }
        }
    ?>
</body>
</html>