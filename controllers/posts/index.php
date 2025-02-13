<?php 
$sql = "SELECT * FROM fruits";
$params = [];


if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $search_query = "%" . $_GET["search_query"] . "%";  
    $sql .= " WHERE namee LIKE :search_query";  
    $params = ["search_query" => $search_query];  
}


$posts = $db->query($sql, $params)->fetchAll();





$pageTitle = "Fruits";
require "views/index.view.php"; 
?>