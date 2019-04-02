<?php

print "De sua primeira nota:";
$a=(float)fgets(STDIN);

print "De sua segunda nota:";
$b=(float)fgets(STDIN);

$media=($a+$b)/2;

if ($media>=7 and $media<10){
    print "Aprovado\n";
}
if ($media<7){
    print "Reprovado\n";
}
if ($media==10){
    print "Aprovado com Distinção\n";
}
 
