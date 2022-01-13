<?php

$totaal_prijs = 0;

$boodschappenlijst = $app["database"]->selectAll("groceries", "boodschappenlijst");


require "views/index.view.php";