<?php

if(isset($_GET['semaine']) && ($_GET['semaine'] === "12")) {
    echo "Semaine: " . $_GET['semaine'];
}