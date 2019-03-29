<?php

print "Primeiro número:";
$nu1=(float)fgets(STDIN);

print "Segundo número;";
$nu2=(float)fgets(STDIN);

print "Terceiro número:";
$nu3=(float)fgets(STDIN);

if ($nu1>$nu2 and $nu1>$nu3 and $nu2>$nu3){
    print "$nu1";
    print "$nu2";
    print "$nu3";
}
if ($nu2>$nu1 and $nu2>$nu3 and $nu3>$nu1){
    print "$nu2";
    print "$nu3";
    print "$nu1";
}
if ()
