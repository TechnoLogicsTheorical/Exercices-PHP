<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer une surface !</title>
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
    <h1>Exercice - Calculer une suface</h1>
    
    <form method="post">
        <label for="labelLongueur">Longeur :</label>
        <input type="number" name="Longueur" id="labelLongueur" required autofocus placeholder="Entrez une valeur !">
        <label for="labelLargeur">Largeur :</label>
        <input type="number" name="Largeur" id="labelLargeur" required placeholder="Entrez une valeur !">
        <input type="submit" value="Calculer">
    </form>

    <?php
        // Stockage de variables pour des contenus récurrentes
        $startPara = '<p class="respond">';
        $endPara = '</p>';

        function calcSurface($argument1, $argument2) 
        {
            $total = ($argument1 * $argument2);
            return "Le résultat de la surface est : $total M2";
        }

        // Condition SI : La variable POST est vide alors fait cela SINON ...
        if (empty($_POST)) 
        {
           echo ('<p class="respond error">' . "Veuillez rentrez les valeurs !" . $endPara);
        }
        else 
        {
            // Récuperation et stockage de la variable Super-Globale 
            $longueur = $_POST["Longueur"];
            $largeur = $_POST["Largeur"];
            
            echo($startPara . calcSurface($longueur, $largeur) . $endPara);
        }
    ?>
</body>
</html>