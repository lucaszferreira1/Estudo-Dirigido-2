<?php

print "Digite o primeiro número:";
$primeiro=(float)fgets(STDIN);

print "Digite o segundo número:";
$segundo=(float)fgets(STDIN);

if ($primeiro>$segundo){
    print "O primeiro é maior\n";
}

else {
    print "O segundo é maior\n";
}
