<table>
    <tr>
        <th>ID</th>
        <th>joketext</th>
        <th>jokeclou</th>
        <th>jokedate</th>
    </tr>
<?php
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

    foreach ($aJokes as $aJokes) {
        echo "<tr>
            <td> " . $aJokes['id'] . "</td>
            <td> " . $aJokes['joketext'] . "</td>
            <td> " . $aJokes['jokeclou'] . " </td>
            <td> " . $aJokes['jokedate'] . "</td>
            </tr>";
}
?>
