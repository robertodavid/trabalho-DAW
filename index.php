<?php
session_start();

define("BASE_URL", "http://odonto2.pc/");

require 'vendor/autoload.php';

$core = new Core\Core();
$core->run();