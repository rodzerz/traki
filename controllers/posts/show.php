<?php
if (!isset($GET["id"]) || $_GET["id"] != ""){
    function redirectIfNotFound() {
        header("Location: /404.php");
        exit();
    }
    
}
$sql = "SELECT * FROM fruits WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post){
    redirectIfNotFound();
}
require "views/posts/show.view.php";