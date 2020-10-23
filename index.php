<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Selection</title>
    <style>
        * {
            
        }
        h1 {

        }
    </style>
</head>
<body>
    <h1>Exercice PHP - Veuillez choisir une ville :</h1>

    <form method="post">
        <label for="ville">Sélectionner une ville :</label>
        <select name="ville" id="ville">
            <optgroup label="Villes :">
                <option selected disabled hidden>Choose here</option>
                <option value="Paris">Paris</option>
                <option value="Berlin">Berlin</option>
                <option value="Mouscou">Mouscou</option>
            </optgroup>
            <input type="submit" value="Envoyer la réponse">
        </select>
    </form>

    <?php
        $ville = $_POST["ville"];

        switch ($ville) {
            case 'Paris':
                echo('<p class="respond">La ville de '.$ville. " est la capitale de la ". 'France </p>');
                break;
            case 'Berlin':
                echo('<p class="respond">La ville de '.$ville. " est la capitale de la ". 'Allemagne </p>');
                break;
            case 'Mouscou':
                echo('<p class="respond">La ville de '.$ville. " est la capitale de la ". 'Russie </p>');
                break;
            default:
                echo("Veuillez faire un choix !");
                break;
        }
    ?>
</body>
</html>