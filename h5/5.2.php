<?php
/**
 * User: Bas van Zutphen
 * Date: 27/3/2020
 * File: Opdracht 5.2
 */

include "../Includes/header.php";
include "../Includes/variabelen.php";
?>
    <!--dit hebben we samen gemaakt in de les-->
    <h3>Taak 1</h3>
    <form action="form_data52.php" method="get">
        <div class="well well-lg">
            <label>Voor en Achternaam:</label>
            <input name="fullname" type="text"><br><br>

            <label>Reden uitschrijven:</label>
            <select name="reason2quit">
                <option value="leraar doet stoer">leraar doet stoer</option>
                <option value="yonis is weg">yonis is weg</option>
                <option value="opleiding is kut">opleiding is kut</option>
                <option value="php sucks">php sucks</option>
            </select><br><br>

            <label>Leerjaar:</label>
            <input type="radio" name="year" value="1">1
            <input type="radio" name="year" value="2">2
            <input type="radio" name="year" value="3">3<br><br>

            <input type="submit" name="verzend" value="verzend">
        </div>
    </form>
<?php
include "../Includes/footer.php";
?><?php
