<?php
print "Digite um preço:";
$nu1=(float)fgets(STDIN);
print "Digite um preço:";
$nu2=(float)fgets(STDIN);
print "Digite um preço:";
$nu3=(float)fgets(STDIN);
if ($nu1<$nu2 and $nu1<$nu3){
    print "O primeiro é o mais barato\n";
}
if ($nu2<$nu1 and $nu2<$nu3){
    print "O segundo é o mais barato\n";
}
if ($nu3<$nu1 and $nu3<$nu2){
    print "O terceiro é o mais barato\n";
}
