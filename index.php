<?php

session_start();

// Setting default values
define("USER", "me");
define("PASSWORD", "demo");

// Suppose the user is online
$_SESSION['authenticated'] = 'true';
setcookie("user","me",time()+60);

require_once('views/header.php');

include 'models/Card.php';

$cards[] = new Card('hi');
$cards[] = new Card('salut');
$cards[] = new Card('oi');
$cards[] = new Card('other','with content');

foreach($cards as $card) echo $card;
require_once('views/footer.php');
?>
