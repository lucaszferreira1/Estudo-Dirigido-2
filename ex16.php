</php 

print "Digite o primeiro número:";
$num1=(float)fgets(STDIN);

print "Digite o segundo número:";
$num2=(float)fgets(STDIN);

print "Digite o terceiro número:";
$num3=(float)fgets(STDIN);

print "Digite o quarto número:";
$num4=(float)fgets(STDIN);

print "Digite o quinto número:";
$num5=(float)fgets(STDIN);

$soma=$num1+$num2+$num3+$num4+$num5;
$media=$soma/5;

print "A soma é $soma\n";
print "A média é $media\n";
