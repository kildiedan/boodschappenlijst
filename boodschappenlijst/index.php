<?php
require "core/bootstrap.php";
require "functions.php";


require router::load("routes.php")
    ->direct(request::uri(), request::method());



