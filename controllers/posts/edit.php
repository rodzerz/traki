<?php
$pageTitle = "Redigesana";

require "Validator.php";

$sql = "SELECT * FROM fruits WHERE id = :id";
$params = ["id" => $_GET["id"] ?? $_POST["id"]];

$post = $db->query($sql, $params)->fetch();

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    if(!Validator::string($_POST["namee"], min: 2, max: 50)){
        $errors["namee"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm un ne mazākam par 1 rakstzīmi ";
    }
    if(empty($errors)){
        $sql = "UPDATE fruits
        SET namee = :namee
        WHERE id = :id;";
        $params["namee"] = $_POST["namee"];
        $db->query($sql, $params);
        header("Location: /show?id= " . $_POST["id"]); 
        exit();
    }
}


require "views/posts/edit.view.php";