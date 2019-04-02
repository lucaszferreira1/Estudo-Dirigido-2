<?php

print "Digite um número:";
$nu1=(float)fgets(STDIN);

print "Digite um número:";
$nu2=(float)fgets(STDIN);

print "Digite um número:";
$nu3=(float)fgets(STDIN);

if ($nu1>$nu2 and $nu1>$nu3){
    print "O primeiro número é o maior\n";
}
if ($nu2>$nu1 and $nu2>$nu3){
    print "O segundo é o maior\n";
}
if ($nu3>$nu1 and $nu3>$nu2){
    print "O terceiro é o maior\n";
}
if ($nu1<$nu2 and $nu1<$nu3){
    print "O primeiro número é o menor\n";
}
if ($nu2<$nu1 and $nu2<$nu3){
    print "O segundo é o menor\n";
}
if ($nu3<$nu1 and $nu3<$nu2){
    print "O terceiro é o menor\n";
}
 
