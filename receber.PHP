<?php
# Back-end

echo "\n<pre>\n";
print_r($_GET); #Array
echo "\n</pre>\n";

print("\n<br><strong>Nome: </strong>");
print("$_GET[nome]");

print("\n<br><strong>E-mail: </strong>");
print("$_GET[email]");

print("\n<br><strong>Senha: </strong>");
print("$_GET[senha]");

print("\n<br><strong>Data de Nascimento: </strong>");
print("$_GET[data_de_nascimento]");
