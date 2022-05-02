<?php
 
    $idd = $_GET['idd']; //Nadanie IDD dla elementów 
 
    $data = file_get_contents('../dataset/users.json'); //Sćieżka do pliku
    $json = json_decode($data, true); //Funckja dekodująca plik JSON 
 
    unset($json[$idd]); //Usuwanie 
 
    $json = json_encode($json, JSON_PRETTY_PRINT); //Zwrócenie wartośći
    file_put_contents('../dataset/users.json', $json); //Umieszczenie w pliku JSON
 
 header('location: ../index.php'); //Powróć do index.php
?>