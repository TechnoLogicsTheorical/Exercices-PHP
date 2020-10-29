

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php
    $debug_mode = false;

        try {
            $db = new PDO('mysql:host=localhost;dbname=test', "root", "");
            if ($debug_mode)
            {
                echo "Succesfull setted db <br>";
                var_dump($db);
            }
        }
        catch (Exception $e) {
            echo("Not succesfull, error : ". $e->getMessage());
        }

        $query = $db->query('SELECT * FROM tableclients');
        if ($query === false) {
            var_dump($db->errorInfo());
            die("Erreur SQL");
        }

        $data = $query -> fetchAll(PDO::FETCH_ASSOC);
        // echo "<br> Result data: <br>";
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        for ($i=0; $i < count($data) ; $i++) { 
            echo("Identifiant : " . $data[$i]["id"] . "<br>");
            echo("Nom : " .$data[$i]["last_name"] . "<br>");
            echo("Prénom : " .$data[$i]["first_name"] . "<br>");
            echo("Email : " .$data[$i]["email"] . "<br><br>");       
        }
        
    ?>
 
</table>
</body>
</html>