<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Selection</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Indie Flower', cursive;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #0377fc;
            font-size: 36px;
        }
        select, input {
            font-size: 24px;
            padding: 9px 18px;
        }
        h1 {
            font-size: 50px;
        }
        form {
            margin: calc(100vh - 80vh) 0;
        }
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

    <form method="post">
        <label for="ville">Sélectionner une ville :</label>
        <select name="ville" id="ville">
            <optgroup label="Villes :">
                <option selected disabled hidden value=" ">Choissiez une ville !</option>
                <option value="Paris">Paris</option>
                <option value="Berlin">Berlin</option>
                <option value="Mouscou">Mouscou</option>
            </optgroup>
        </select>
        <input type="submit" value="Envoyer la réponse">
    </form>

    <?php
        $startPara = '<p class="respond">';
        $endPara = '</p>';
        $startPhrase = 'La ville de ';
        $endPhrase = ' est la capitale de la ';

        if (empty($_POST)) {
            echo ('<p class="respond error">' . "Veuillez faire un choix !" . $endPara);
        }
        else {
            $ville = $_POST["ville"];
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
                default:
                    echo("Erreur inconnue !");
                    break;
            }
        }
    ?>
</body>
</html>