<?php
/**
 * User: Bas van Zutphen
 * Date: 5-5-2020
 * Time: 15:29
 * File: 6.2.php
 */
$opdracht = "Opdracht 6.2";
include '../Includes/header.php';
?>
<body>
<h1>
    Spel steen papier schaar
</h1>
<p>
    Speel het spel steen - papier - schaar tegen de computer
</p>
<form id="gameFrm" method="get" action="6.2.php">
    <div class="float">
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">
        <img src="../images/steen.png" class='SteenPapierSchaar'>
    </div>
    <div class="float">
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
        <img src="../images/papier.png" class='SteenPapierSchaar'>
    </div>
    <div class="float">
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">
        <img src="../images/schaar.png" class='SteenPapierSchaar'>
    </div>
    <br>
    <div>
        <p>
            Start het spel door schaar, papier of steen te kiezen. De computer kiest samen tegelijkertijd met jou.
        </p>
        <?php
        if (isset($_SESSION['user1']) == false)
        {
            $_SESSION['user1'] = 0;
            $_SESSION['user2'] = 0;
        }
        if (isset($_GET['keuze']))
        {
            echo "Jij koos: <img src='../images/{$_GET['keuze']}.png' class='SteenPapierSchaar'>";
            // Wat kiest de computer
            //Random wordt er een getal tussen de 0 en 2 gekozen
            $opties = array("steen","papier","schaar");
            $computerkeuzegetal = rand(0,2);
            $computerkeuze = $opties[$computerkeuzegetal];
            echo "&nbsp;&nbsp;De computer koos: <img src='../images/{$computerkeuze}.png' class='SteenPapierSchaar'> <br><br>";

            $spelerKeuze = $_GET['keuze'];

            if ($spelerKeuze == $computerkeuze)
            {
                echo "gelijke keuzes wint niemand <br><br>";
                $_SESSION['user2'] += 0;
                echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
            }
            else if ($spelerKeuze == "schaar" && $computerkeuze == "papier")
            {
                $_SESSION['user1'] += 1;
                echo "schaar wint van papier <br><br>";
                echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
            }
            else if ($spelerKeuze == "schaar" && $computerkeuze == "steen")
            {
                $_SESSION['user2'] += 1;
                echo "schaar verliest van steen <br><br>";
                echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
            }
            else if ($spelerKeuze == "steen" && $computerkeuze == "schaar")
            {
                $_SESSION['user1'] += 1;
                echo "steen wint van schaar <br><br>";
                echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
            }
            else if ($spelerKeuze == "steen" && $computerkeuze == "papier")
            {
                $_SESSION['user2'] += 1;
                echo "steen verliest van papier <br><br>";
                echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
            }
            else if ($spelerKeuze == "papier" && $computerkeuze == "steen")
            {
                $_SESSION['user1'] += 1;
                echo "papier wint van steen <br><br>";
                echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
            }
            else if ($spelerKeuze == "papier" && $computerkeuze == "schaar")
            {
                $_SESSION['user2'] += 1;
                echo "papier verliest van schaar <br><br>";
                echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
            }
            if ($_SESSION['user1'] == 5)
            {
                $Winnaar = "<br><br>Jij Wint! <br> Het spel start weer opnieuw als je een nieuwe keuze maakt";
                echo $Winnaar;
                $_SESSION['user1'] = 0;
                $_SESSION['user2'] = 0;
                session_destroy();
            }
            else if ($_SESSION['user2'] == 5)
            {
                $Winnaar = "<br><br>De Computer wint! <br> Het spel start weer opnieuw als je een nieuwe keuze maakt";
                echo $Winnaar;
                $_SESSION['user1'] = 0;
                $_SESSION['user2'] = 0;
                session_destroy();
            }
        }

        ?>
    </div>
</form>
<br>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
