<?php
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

echo $task2.'<br>';

$task3 = "lancering in :";

for ($tel=19;$tel >=0; $tel--)
{
    $task3 = $task3.$tel;

    if ($tel > 0)
    {
        $task3 .= ",";
    }

}

echo $task3;
?>