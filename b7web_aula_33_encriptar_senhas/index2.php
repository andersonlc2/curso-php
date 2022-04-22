<?php

$hash = '$2y$10$eibAxh2VrI1inWBwVSWUBONHV89UtYnyNRg1KXqhghB2iV99e6ax.';
$senha = "1234";

if (password_verify($senha, $hash)) {
  echo "Senha correta!";
} else {
  echo "Senha incorreta!";
}