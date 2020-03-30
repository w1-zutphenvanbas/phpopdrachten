<?php
/**
 * User: Bas van Zutphen
 * Date: 29-03-2020
 * Time: 14:20
 * File: Opdracht5.2.php
 */
?>

<?php
include "includes/header.php";
?>
    <form action="form_data52.php" method="get">
        <h1>Uitschrijfformulier Koning Willem 1 College</h1>
        <hr>
        <!--Hier voert de gebruiker de voor en achternaam is-->
        <label>Voor en achternaam</label>
        <input name="Voor-Achternaam" type="text"><br>
        <!--hier voert de student hun studentnummer in-->
        <label>Studentennummer</label>
        <input name="Studentennummer" type=number><br>
        <!--hier voert de student de datum van uitschrijving in-->
        <label>Datum van uitschrijving</label>
        <input name="DatumUitschrijving" type="text"><br>

        <label>Reden van uitschrijving</label>
        <select name="Reden">
            <option value="Saai">Saai</option>
            <option value="Veel tuis maken">Veel thuis maken</option>
            <option value="Saaie docenten">saaie docenten</option>
            <option value="ik ga naar een andere opleiding">Naar een andere opleiding</option>
        </select><br>

        <label>Leerjaar</label><br>
        <input name="Leerjaar" type="radio" value="leerjaar 1">1e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="leerjaar 2">2e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="leerjaar 3">3e leerjaar</input><br>

        <input name="succesklas" type="checkbox" value="ja">Ik wil me aanmeldden bij de succesklas<br>
        <input name="Verwijder" type="checkbox" value="ja">Verwijder mijn gegevens uit het systeem<br>
        <label>Geef hieronder de reden van je uitschrijving op</label><br>
        <input name="Bericht" type="text"><br>

        <input type="submit" name="verzenden" value="verzenden">
    </form>
<?php
include "includes/footer.php";
?>