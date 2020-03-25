<?php
/**
 *User:Bas van Zutphen
 *Date: 12-2-2020
 *Time: 11:29
 *File: 3.1.php
 */
?>
<?php
include "../Includes/header.php";
include "script.php";
?>
<link href="../footer.css" rel="stylesheet" type="text/css">

<body>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../index.php">Terug</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    </p>
    <p>
        <?php
        echo "<h1>oefening 4.4</h1>";
        // Vandaag
        $nu = strtotime("now");
        $datumVandaag = date('d-m-y', $nu);
        $dagenWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");

        // Dag van de week 0-7
        $datumDag = date('w', $nu);
        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";

        // Morgen
        $nu = strtotime('+1 days');
        $datumVandaag = date('d-m-y', $nu);
        $datumDag = date('w',$nu);

        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";
        // Morgen
        $nu = strtotime('+2 days');
        $datumVandaag = date('d-m-y', $nu);
        $datumDag = date('w',$nu);

        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";
        // Morgen
        $nu = strtotime('+3 days');
        $datumVandaag = date('d-m-y', $nu);
        $datumDag = date('w',$nu);

        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";
        // Morgen
        $nu = strtotime('+4 days');
        $datumVandaag = date('d-m-y', $nu);
        $datumDag = date('w',$nu);

        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";
        // Morgen
        $nu = strtotime('+5 days');
        $datumVandaag = date('d-m-y', $nu);
        $datumDag = date('w',$nu);

        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";
        // Morgen
        $nu = strtotime('+6 days');
        $datumVandaag = date('d-m-y', $nu);
        $datumDag = date('w',$nu);

        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";
        // Morgen
        $nu = strtotime('+7 days');
        $datumVandaag = date('d-m-y', $nu);
        $datumDag = date('w',$nu);

        echo "Dag ".$datumDag. " is " .$dagenWeek[$datumDag]." de datum is ".$datumVandaag;
        echo "<br>";
        ?>

        <?php
        ?>

    </p>
</main>
<?php include "../Includes/variabelen.php"?>
<?php include "../Includes/Footer.php"?>



