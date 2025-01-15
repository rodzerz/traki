<?php

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER['REQUEST_METHOD'] === "POST") {
    // Sagatavojam SQL vaicājumu
    $sql = "INSERT INTO posts (content) VALUES (:content)";

    


   $params = ["content" => $_POST["content"]];
  $db->query($sql,$params);
   header("Location: /");
    exit();
   
}

require "views/posts/create.view.php";

$pageTitle = "traki";