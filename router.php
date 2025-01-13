<?php 

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if($uri == "/"){
   require "controllers/index.php";
} else if ($uri == "/about"){
 require "controllers/story.php";
} else  {
    http_response_code(404);
    echo "<p>Lapa netika atrasta</p>";
    die();
} ?>


