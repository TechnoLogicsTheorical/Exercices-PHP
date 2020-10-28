<?php
    try {
        $db = new PDO("sqlite:database.db");
        echo "Succesfull setted db <br>";
        // var_dump($db);
    }
    catch (Exception $e) {
        echo("Not succesfull, error : ". $e->getMessage());
    }

    $query = $db->query('SELECT * FROM users_table');
    if ($query === false) {
        var_dump($db->errorInfo());
        die("Erreur SQL");
    }

    $data = $query -> fetchAll(PDO::FETCH_ASSOC);
    echo "<br> Result data: <br>";
    print_r($data);
?>