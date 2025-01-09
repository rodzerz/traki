<?php dd($_SERVER["REQUEST_URI"]) ;
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if($uri == "/"){
    require "controllers/index.php";
} else if ($uri == "about"){
    require "controllers/story.php";
} else if ($uri == "categories"){
    require "controllers/categories.php";
} ?>

<?php if ( http_response_code(404)){ ?>
    <p>Atvainojiet, lapa netika atrasta!</p>
    die();
<?php } ?>

