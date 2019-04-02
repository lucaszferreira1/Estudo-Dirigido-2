<?php

$centena=0;
$dezena=0;
$unidade=0;

print "Digite um número entre 0-999:";
$zum= (int)fgets(STDIN);
$num= $zum;

    $centena=(int)($zum/100)%100;
    $dezena= (int)($zum/10)%10;
    $unidade=(int)($zum%100)%10;

    if ($centena>1 or $centena==0){
        print "$centena Centenas ";
    }
    elseif ($centena==1){
        print "$centena Centena ";
    }

    if ($dezena>1 or $dezena==0){
        print "$dezena Dezenas ";
    }
    elseif ($dezena==1){
        print "$dezena Dezena ";
    }
    if ($unidade>1 or $unidade==0){
        print "e $unidade Unidades \n";
    }
    elseif ($unidade==1){
        print "e $unidade Unidade \n";
    }
