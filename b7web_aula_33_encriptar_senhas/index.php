<?php

$senha = "1234";
// $hashAntigo = md5($senha); 

$hash = password_hash($senha, PASSWORD_DEFAULT);


echo "Senha original: ".$senha."<br/>";
echo "Hash: ".$hash;
