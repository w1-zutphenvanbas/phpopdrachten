<?php
/**
 *User:Bas van Zutphen
 *Date: 5-2-2020
 *Time: 11:55
 *File: index.php
 */
?>
<!doctype HTML>
<html>
<head>
    template
</head>
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
                        <a href="opdracht 2.1.php">Opdracht  2.1</a>
                    </li>
                    <li>
                        <a href="opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="../h3/3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="../h2/opdracht2.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <p>
            <?php echo "Hello World!";?>
        </p>
    </main>
    </body>
</html>