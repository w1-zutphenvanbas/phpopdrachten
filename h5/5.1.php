<?php
/**
 * User: Bas van Zutphen
 * Date: 26/3/2020
 * File: Opdracht 5.1
 */

include "../Includes/header.php";
include "../Includes/variabelen.php";
?>
    <h1>
        Restaria Kees Kroket
    </h1>
    <p>
        Visstraat 12<br>
        5211 DN 's-Hertogenbosch<br>
        073 613 6720<br>
        info@restariakeeskroket.nl
    </p>
    <!--hier wordt een form aangemaakt en die stuurt de ingevulde gegevens door naar de form_data51.php bestand-->
    <form action="form_data51.php" method="get">
        <!--hier voeren ze de naam van het bedrijf in-->
        <label>Bedrijfsnaam: </label><br>
        <input name="companyname" type="text"><br>
        <!--hier voeren ze de voornaam in-->
        <label>Voornaam: </label><br>
        <input name="firstname" type="text"><br>
        <!--hier voeren ze de achternaam in-->
        <label>Achternaam: </label><br>
        <input name="lastname" type="text"><br>
        <!--hier voeren ze de tel nummer in-->
        <label>Telefoon: </label><br>
        <input name="phonenumber" type="text"><br>
        <!--hier voeren ze de e-mail in-->
        <label>E-mail: </label><br>
        <input name="e-mail" type="text"><br>
        <!--hier kunnen ze een bericht/opmerking plaatsen-->
        <label>Bericht: </label><br>
        <br>
        <textarea name="message" rows="6" cols="40"></textarea>
        <br><br>
        <input type="submit" name="verzend" value="verzend">
    </form>
<?php
include "../Includes/footer.php";
?>