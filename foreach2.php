<?php
$dienos = [Pirm,Ant,Tre,Ket,Penk,Ses,Sek];
$array = ["pirm" => "1", "ant" => "2", "tre" => "3", "ket" => "4", "pen" => "5", "ses" => "6", "sek" => "7"];
foreach ($array as $value => $item) {
    echo $value . " : " . $item . "<br>";
}