<?php

//hier tel ik af met een whileloop
$teller = 19;
$task2 = "lancering in :";
while ($teller >= 0)
{
    $task2 = $task2.$teller;
    if ($teller > 0)
    {
        $task2 .= ",";
    }

    $teller--;

}
//hier tel ik af met een forloop
$task3 = "lancering in :";

for ($tel=19;$tel >=0; $tel--)
{
    $task3 = $task3.$tel;

    if ($tel > 0)
    {
        $task3 .= ",";
    }

}
//hier maak ik verschillende kopteksten
$koptekst = 1;
$iteratie = 1;
$task4 =  "<h$koptekst> Dit is de $iteratie e iteratie </h$koptekst>";

while ($iteratie <= 6)
{
    $task4 = $task4."<h$koptekst> Dit is de $iteratie e iteratie </h$koptekst>";


    $iteratie++;
    $koptekst++;


}

// hier maak ik een table aan
$task5 ="<table><tr>";
for ($iter=1;$iter <=10; $iter++)
{

    $task5 = $task5. "<td>Dit is de  $iter e iteratie</td>";
}
$task5 = $task5."</tr></table>";


$task6 = "";
$jaartal = "2020";
$leeftijd = 20;

// hier maak ik een whileloop aan met mijn jaartal en leeftijd
while ($jaartal >= 2000)
{
    $task6 .= "<br>In $jaartal was ik $leeftijd jaar oud";
    $jaartal --;
    $leeftijd --;

}

$task7 = "";
$jaartal = "2020";
$leeftijd = 20;

// hier maak ik een forloop met een switch waar ik aan geef wat ik ik ben in die jaartal
for ($leeftijd=20;$leeftijd >=0; $leeftijd--)
{

    $jaartal --;


    switch ($leeftijd)
    {
        case 4:
          $lifephase = " In $jaartal was ik $leeftijd  en werd ik een kleuter";
         break;
        case 2:
            $lifephase = " In $jaartal was ik $leeftijd  en werd ik een peuter";
        break;
        case 8:
            $lifephase = " In $jaartal was ik $leeftijd  en werd ik een tiener";
            break;
        case 12:
            $lifephase = " In $jaartal was ik $leeftijd  en werd ik een puber";
            break;
        case 18:
            $lifephase = " In $jaartal was ik $leeftijd  en werd ik een adolescent";
            break;
        case 20:
            $lifephase = " In $jaartal was ik $leeftijd  en werd ik een volwassen";
            break;
        default:
            $lifephase = "";
            break;

    }
    $task7 .= "<br>In $jaartal was ik $leeftijd jaar oud".$lifephase;

}

?>