<?php

$app["database"]->insert("groceries", [
    "name" => $_POST["name"],
    "price" => $_POST["price"],
    "number" => $_POST["number"]

]);
header("location: /");