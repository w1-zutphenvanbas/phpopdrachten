<?php
/**
 * User: Bas van Zutphen
 * Date: 4-3-2020
 * Time: 11:55
 * File: script.php
 */
?>
<link href="../footer.css" rel="stylesheet" type="text/css">

<?php
include "Includes/header.php";
?>

<?php
/**
 * Nederlands = Ende, Jan-Chris van den
 * Engels = Giesen, Jan
 * PHP = Saebu, Abu
 * JavaScript = Evers, Remco
 * ASP = Meer, Martijn van
 * Modeleren = Bijnen, Wim van
 * Database SQL = Wetering, Martijn van de
 * Digitale vaardigheden gevorderd = Pielage, Larissa
 * Rekenen = Wetering, Martijn van de
 * Loopbaan & Burgerschap = Ruiter, Paula de
 * Computertekenen = Berg, Pieter van den
 */



$courseName = 'Engels';
$teacherName = '';

switch($courseName){
    case "Nederlands":
        $teacherName = 'Ende, Jan-Chris van den';
        break;
    case "Engels":
        $teacherName = 'Mitrovic';
        break;
    case "PHP":
        $teacherName = 'Saebu, Abu';
        break;
    case "JavaScript":
        $teacherName = 'Evers, Remco';
        break;
    case "ASP":
        $teacherName = 'Gijsbrechts, Ralph';
        break;
    case "Modelleren":
        $teacherName = 'Bijnen, Wim van';
        break;
    case "Database SQL":
        $teacherName = 'Wetering, Martijn van de';
        break;
    case "Digitale vaardigheden gevorderd":
        $teacherName = 'Pielage, Larissa';
        break;
    case "Rekenen":
        $teacherName = 'Wetering, Martijn van de';
        break;
    case "Loopbaan & Burgerschap":
        $teacherName = 'Visser, Thomas';
        break;
    case "Computertekenen":
        $teacherName = 'Berg, Pieter van den';
        break;
}

echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
?>

<?php
include "../Includes/variabelen.php";
include "../Includes/Footer.php";

?>