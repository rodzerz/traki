<?php
require "Validator.php";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    if (!Validator::string($_POST["content"],  max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garakam par 50 rakstzimem";
    }

    if (empty($errors)){
       $sql = "INSERT INTO posts (content)
                VALUES
                (:content)";
 $params = ["content" => $_POST["content"]];
 $db->query($sql,$params);
  header("Location: /");
   exit();
        
    }


  
   
}

require "views/posts/create.view.php";

$pageTitle = "traki";