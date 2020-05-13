<?php
if ($_POST['username'] == 'Abu' && $_POST['password'] == 'bekend')
{
session_start();
$_SESSION['username'] = $_POST['username'];
header('location: welkom.php');
}
else {
$message = "Ongeldige username/wachtwoord
{$_POST['username']}, probeer het nog eens.";
include "opdracht6.1.php";
}
?>

<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "123456",
    "Rosalie" => "Bloemblaadjes"
);
?>
