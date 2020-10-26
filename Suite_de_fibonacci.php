<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suite de Fibonacci</title>
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
        /* Selecteur Titre */
        h1 {
            font-size: 50px;
        }
        /* Selecteur Tableaux */
        table {
            max-width: 80%;
        }
        td {
            text-align: center;
            padding: 25px;
        }
        table, td {
            display: inline-block;
            border: 1px solid #333;
        }

    </style>
</head>
<body>
    <h1>Exercice PHP - Suite de Fibonacci</h1>
    <table>
        <tbody>
            <tr>
            <?php
                // Stockage de variables
                // A
                $number1 = 0;
                // B
                $number2 = 1;
                //Boucle pour, allant de 1 à 20 faire ...
                for($i = 0; $i < 20; $i++)
                {
                    $total = $number1 + $number2;
                    $number1 = $number2;
                    $number2 = $total;
                    echo("<td>$total</td>");
                }
            ?>
            </tr>
        </tbody>
    </table>
</body>
</html>