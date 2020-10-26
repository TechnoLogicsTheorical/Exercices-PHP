<?php
    $tablouSemaine = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];

    foreach ($tablouSemaine as $value)
    {
        echo("<p>". ucfirst($value)."</p><br>" );
    }
?>