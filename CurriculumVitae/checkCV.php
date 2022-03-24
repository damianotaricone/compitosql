<?php

echo ("Problemi trovati:");

$email = $_POST["email"];
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$cap = $_POST["cap"];
$calendar = $_POST["datanascita"];
$tstudio = $_POST["titolostudio"];
$patente = $_POST["patente"];
$professione = $_POST["professione"];
$re_cap = "/^[0-9]{5}$/";
$re_email = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";

if (!preg_match($re_email,$email))
    echo("E-Mail non inserita correttamente ");

if (!preg_match($re_cap,$cap))
    echo("CAP non inserito correttamente ");

if($nome == "")
    echo("Nome non inserito correttamente ");

if($cognome == "")
    echo("Cognome non inserita correttamente ");

if($calendar == "")
    echo("Data nascita non inserita ");

if($tstudio == "")
    echo("Titolo di studio non inserito correttamente ");

if($patente == "")
    echo("Patente non inserita ");

if($professione == "")
    echo("Patente non inserito ");

?>