<?php
$task2 = "Lancering in :";

$teller = 19;
//teller laten aflopen zodat er staat lancering in ...
while($teller>=0){
    $task2 = $task2.$teller;
    if($teller > 0)
    {
        $task2.= ",";
    }
    $teller--;
}

$task3 = "Lancering in : ";
for ($teller =19; $teller>=0;$teller--)
{
    $task3 .= $teller;
    // geen komma op na de 0
    if($teller > 0) {
        $task3 .= ",";
    }
}

$task4 = "";
$teller = 1;
while($teller <= 6){
    $task4 .= "<h$teller>Dit is de ". $teller. "e iteratie<h$teller>";
    $teller++;
}
//een iteratie in een tabel
$task5 = "";
$begin = "<table><tr>";
$eind = "</table></tr>";
for($tel=1; $tel <= 10; $tel++)
{
    $task5 .= "<td>Dit is de ". $tel . "e iteratie</td>";
}
$task5 = $begin.$task5.$eind;
//zorgt ervoor dat er een tabel omheen komt en een table row eromheen met daar tussenin de teller

// Taak 6
//een while loop die aftelt en bij de jaren 2003 en 2020 staat er iets extra
$task6= '';
$year = date('Y');
$age = 17;

while($year >= 2003){

    $task6 .= "<p>In " . $year . " was ik " . $age . " jaar oud</p><br>";

    if($year == 2020){
        $task6 .= "<p>In " . $year. " ben/word ik " . $age . " jaar oud</p><br>";
    }
    elseif ($year == 2003){
        $task6 .= "<p>In " . $year . " ben ik geboren</p><br>";
    }

    $year--;
    $age--;
}

// Taak 7
//een aftellende loop met de jaren en bij elke stage in me leven een tekst
$task7 = '';
$years = date('Y');
for($ages = 17; $ages > 0; $ages--) {

    switch ($ages) {
        case 0:
            $task7 .= "<p>In $years ben ik $ages geboren en was ik een baby</p>";
            break;
        case 2:
            $task7 .= "<p>In $years was ik $ages jaar oud en werd ik een peuter</p>";
            break;
        case 4:
            $task7 .= "<p>In $years was ik $ages jaar oud en werd ik een kleuter</p>";
            break;
        case 8:
            $task7 .= "<p>In $years was ik $ages jaar oud en werd ik een tiener</p>";
            break;
        case 12:
            $task7 .= "<p>In $years was ik $ages jaar oud en werd ik een puber</p>";
            break;
        case 18:
            $task7 .= "<p>In $years was ik $ages jaar oud en werd ik een adolescent</p>";
            break;
        case 20:
            $task7 .= "<p>In $years was ik $ages jaar oud en werd ik een volwassen</p>";
            break;
        default:
            $task7 .= "<p>In $years was ik $ages jaar oud</p>";
            break;
    }
    $years--;
}
?>
