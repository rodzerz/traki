<?php

require "Validator.php";

// Ja ir GET pieprasījums, pārbaudi, vai ieraksts pastāv
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Ja šī funkcija ir nepieciešama, pārliecinies, ka tā ir definēta
    redirectIfNotFound();
}

// Ja ir POST pieprasījums (dzēšana)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Pārbaudi, vai 'id' ir norādīts un vai tas ir derīgs
    if (!isset($_POST["id"]) || !Validator::string($_POST["id"]) || $_POST["id"] <= 0) {
        // Ja 'id' nav derīgs, varbūt pievienot kļūdas ziņojumu un apturēt dzēšanu
        echo "Neatbilstošs ID!";
        exit();
    }

    // Sagatavo SQL vaicājumu dzēšanai
    $id = $_POST["id"];
    $sql = "DELETE FROM fruits WHERE id = :id";
    $params = ['id' => $id];

    // Veic dzēšanu no datubāzes
    $db->query($sql, $params);

    // Pāradresē uz sākuma lapu pēc dzēšanas
    header("Location: /");
    exit();
}
?>
