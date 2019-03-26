<?php

print "Digite um letra: M ou F:";
$sexo=(string)fgets(STDIN);

if ($sexo=="m"){
    print "Masculino";
}
elseif($sexo=="f"){
    print"Feminino";
}
elseif($sexo<>"m" and $sexo<>"f"){
    print "Sexo Invalido";
}
