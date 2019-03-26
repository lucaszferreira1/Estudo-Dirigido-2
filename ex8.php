<?php

print "Digite um produto:";
$nu1=(string)fgets(STDIN);

print "Digite um produto:";
$nu2=(string)fgets(STDIN);

print "Digite um produto:";
$nu3=(string)fgets(STDIN);

if ($nu1<$nu2 and $nu1<$nu3){
    print "O primeiro é o mais barato\n";
}
if ($nu2<$nu1 and $nu2<$nu3){
    print "O segundo é o mais barato\n";
}
if ($nu3<$nu1 and $nu3<$nu2){
    print "O terceiro é o mais barato\n";
}
