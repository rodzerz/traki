<?php
require "Validator.php";

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
   
    if (!Validator::string($_POST["namee"], min: 2, max: 50)) {
        $errors["namee"] = "Augļa nosaukumam jābūt no 2 līdz 50 rakstzīmēm garam!";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO fruits (namee) VALUES (:namee)";
        $params = ["namee" => $_POST["namee"]];
        $db->query($sql, $params);
        header("Location: /");
        exit();
    }
}

require "views/posts/create.view.php";

$pageTitle = "Augļi";
?>