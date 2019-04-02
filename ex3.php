<?php

print "Digite um letra: M ou F:";
$sexo=(string)fgetc(STDIN);

if ($sexo=="m" or $sexo=="M"){
    print "Masculino";
}
elseif($sexo=="f" or $sexo=="F"){
    print"Feminino";
}
elseif($sexo<>"m" and $sexo<>"f" and $sexo <>"M" and $sexo<>"F"){
    print "Sexo Invalido";
}
