<?php

print "Digite um letra:";
$letra=(string)fgetc(STDIN);

if ($letra=="a" or $letra=="e" or $letra=="i" or $letra=="o" or $letra=="u"){
    print "Vogal\n";
}
else{
    print"Consoante\n";
}
