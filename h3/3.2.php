<?php
/**
 *User:Bas van Zutphen
 *Date: 12-2-2020
 *Time: 11:29
 *File: 3.1.php
 */
?>
<?php
$trafficLightColor ="rood";
$ambulanceComing = true;


?>
    <!doctype HTML>
    <html>
    <head>
        Template
    </head>
    <link href="3.2.css" type="text/css" rel="stylesheet">
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
            <?php
            if ($ambulanceComing==true ||  $trafficLightColor!="groen")
                {
                    $driveOn=false;
                }
            else {
                $driveOn = true;
            }
            if($driveOn==true) {
                echo "<p class='groen'> je mag doorrijden</p>";
            }
            else
            {
              echo "<p class='rood'> je moet stoppen </p>";
            }
            ?>
        </p>
        <p>
            <?php
            $countryName="";
            $currentAge=16;
            if($currentAge>=18 && $countryName="Belgie")
            {
                echo "je woont in $countryName en je bent $currentAge jaar oud.";
                echo " Je mag hier sterk alcohol drinken. ";
            }
            elseif($currentAge>=16 && $countryName="Belgie")
            {
            echo "je woont in $countryName en je bent $currentAge jaar oud.";
            echo " Je mag hier zwak alcohol drinken.";
            }
            if($currentAge>=18 && $countryName="Bulgarije")
            {
                echo "je woont in $countryName en je bent $currentAge jaar oud.";
                echo " Je mag hier alles drinken. ";
            }
            if($currentAge>=17 && $countryName="Cyprus")
            {
                echo "je woont in $countryName en je bent $currentAge jaar oud.";
                echo " Je mag hier alles drinken. ";
            }
            if($currentAge>=18 && $countryName="Nederland")
            {
                echo "je woont in $countryName en je bent $currentAge jaar oud.";
                echo " Je mag hier alle dranken drinken. ";
            }
            if($currentAge>=20 && $countryName="Zweden")
            {
                echo "je woont in $countryName en je bent $currentAge jaar oud.";
                echo " Je mag hier alle drinken. ";
            }
            if($currentAge>=18 && $countryName="Zweden")
            {
                echo "je woont in $countryName en je bent $currentAge jaar oud.";
                echo " Je mag hier zwakke alcohol drinken. ";
            }
            else
            {
                echo"je mag hier niet drinken";
            }
            ?>
        </p>
    </main>
    </body>
    </html>
