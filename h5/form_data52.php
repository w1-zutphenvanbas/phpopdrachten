<!--**
* User: Bas van Zutphen
* Date: 29-03-2020
* Time: 17:30
* File: uitschrijving.php
*/-->
?>
<?php
include "includes/header.php";
?>
</head>
<body>
<h1>Uitschijven Koning willem 1 college</h1>
<hr>
<table>
    <tr>
        <th>Voor en achternaam</th>
        <!--Hier komt de opgegeven waarde in na het versturen-->
        <td><?php echo $_GET["Voor-Achternaam"]; ?></td>
    </tr>
    <tr>
        <!--Hier komt de opgegeven studentnummer-->
        <th>Studentennummer</th>
        <td><?php echo $_GET["Studentennummer"]; ?></td>
    </tr>
    <tr>
        <!--Hier komt de opgegeven Datum van Uitschrijving-->
        <th>Datum van uitschrijving</th>
        <td><?php echo $_GET["DatumUitschrijving"]; ?></td>
    </tr>
    <tr>
        <!--Hier komt de opgegeven reden van Uitschrijving-->
        <th>Reden van uitschrijving</th>
        <td><?php echo $_GET["Reden"]; ?></td>
    </tr>
    <tr>
        <!--Hier komt de opgegeven leerjaar an Uitschrijving-->
        <th>Leerjaar</th>
        <td><?php echo $_GET["Leerjaar"]; ?></td>
    </tr>
    <tr>
        <!--Hier komt de opgegeven klas-->
        <th>Aanmeldden bij de succesklas</th>
        <td><?php echo $_GET["succesklas"]; ?></td>
    </tr>
    <tr>
        <!--Hier komt de opgegeven gegevens die verwijderd worden-->
        <th>Verwijderen gegevens</th>
        <td><?php echo $_GET["Verwijder"]; ?></td>
    </tr>
    <tr>
        <!--Hier komt de opgegeven reden van Uitschrijving-->
        <th>Reden van uitschrijving</th>
    </tr>
    <tr>
        <td><?php echo $_GET["Bericht"]; ?></td>
    </tr>
</table>
<?php
include "includes/footer.php"
?>