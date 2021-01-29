<?php

if(isset($_GET['age'])) {
    echo $_GET['age'];
}
else {
    echo "Pas d'age dans l'url";
}