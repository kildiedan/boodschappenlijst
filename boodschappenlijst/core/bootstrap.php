<?php

$app = [];
$app["config"] = require "config.php";


require "core/database/connection.php";
require "core/request.php";
require "core/database/QueryBuilder.php";
require "core/router.php";
 
$app["database"] = new QueryBuilder(connection::make($app["config"]["database"]));