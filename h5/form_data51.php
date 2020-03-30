<?php
/**
 * User: Bas van Zutphen
 * Date: 25/3/2020
 * File: Opdracht 5.1
 */

?><!--*Hier echo ik de gegevens in een table die de gebruiker invult-->

    <table>
    <tr>
        <td><?php echo  "Bedrijfsnaam: " ?></td>
        <td><?php echo  "".$_GET["companyname"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Voornaam:" ?></td>
        <td><?php echo  "".$_GET["firstname"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Achternaam:" ?></td>
        <td><?php echo  "".$_GET["lastname"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Telefoon:" ?></td>
        <td><?php echo  "".$_GET["Phonenumber"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "E-Mail:" ?></td>
        <td><?php echo  "".$_GET["e-mail"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Bericht:" ?></td>
        <td><?php echo  "".$_GET["message"]; ?></td>
    </tr>
    </table><?php
