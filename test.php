<?php

function add($a,$b){

    return  $a +$b;
}

echo add(2, 3);

echo "<br>---------------------------------------------------------------<br>";

function display($x){

    echo $x;
}

display("Hello");

echo "<br>---------------------------------------------------------------<br>";

function slova($text,$index){

    $x = (explode(" ",$text));
    echo $x[$index];
}

 slova("lorem ipsum dolor", 2);

 echo "<br>---------------------------------------------------------------<br>";

function nahodny_text(){

    $x = ["lorem ipsum", "lorem ipsum dolor", "nahodny text1", "nahodny text2"];
    echo $x[mt_rand (0,3)];
}

nahodny_text();


echo "<br>---------------------------------------------------------------<br>";

function pripocitaj(&$a){
    $a = $a +1;
    
}
$a = 12;
pripocitaj($a);
echo $a;
?>