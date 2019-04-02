<?php 

$vezes=0;
$numimpares=0;
$numpares=0;


while ($vezes<>10){
    print "Digite um número:";
    $num=(int)fgets(STDIN);
    $vezes=$vezes+1;
    if ($num%2==0){
        $numpares=$numpares+1;
    }
    else {
        $numimpares=$numimpares+1;
    }
}

print "Há $numimpares número(s) ímpare(s)\n";
print "Há $numpares número(s) pare(s)\n";

