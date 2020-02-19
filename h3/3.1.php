<?php
/**
 *User:Bas van Zutphen
 *Date: 12-2-2020
 *Time: 11:29
 *File: 3.1.php
 */
?>
<!doctype HTML>
<html>
<head>
    Template
</head>
<?php
$evenement1= "Elfstedentocht";
$evenement2= "Alvestedetocht";
$distance= 200;
$evenement3= "Schaatstocht";
$condition= "Natuurijs";
$Association = "Koninklijke Vereniging De Friesche Elf Steden";
$city1 = "Leeuwarden";
$city2 = "Friesland";
$times1 = 15;
$year = 1909;
$times2 = 1;
$verhaal2="De ".$evenement1." (Fries:  ".$evenement2.") is een ".$distance." kilometer lange ".$evenement3." over ".$condition.
    "die wordt georganiseerd door de ".$Association.". ".$city1." de hoofdstad van ".$city2. ", is start en aankomstplaats. 
    De ".$evenement1." is inmiddels ".$times1." maal verreden en werd door het eerst in ".$year." gereden en wordt maximaal ".$times2.
    " keer per winter gegouden";
?>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <body>
    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
    <aside>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../h2/opdracht%202.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../h2/opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="3.1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="3.2.php">Opdracht 3.2</a>
                    </li>
                </ul>
            </li>
        </ul>



    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <p>
            De
            <?php echo $evenement1 ?>
            (Fries:
            <?php echo $evenement2 ?>
            is een
            <?php echo $distance ?>
            kilometer lange
            <?php echo $evenement3?>
            over
            <?php echo $condition ?>
            die wordt georganiseerd door de
            <?php echo $Association?>
            .
            <?php echo $city1?>
            is de hoofdstad van
            <?php echo $city2?>
            , is start- en aankomstplaats.
            De<?php echo $evenement1?>
            is inmiddels
            <?php echo $times1?>
            verreden en werd voor het eerst in
            <?php echo $year?>
            gereden en wordt maximaal
            <?php echo $times2?>
            keer per winter gehouden

        </p>
        <p>
        <?php echo $verhaal2; ?>
        </p>
    </main>
    </body>
</html>


