<?php

if(isset($_GET['batiment'], $_GET['salle']) && ($_GET['batiment'] === "12") && ($_GET['salle'] === "101")) {
    echo "Bâtiment: " . $_GET['batiment'] . "<br>" . "Salle: " . $_GET['salle'];
}