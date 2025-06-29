<?php
$comando = $_GET['cmd'] ?? 'ligar'; // exemplo: ligar ou desligar
$porta = 'COM5'; // ou COM3 no Windows

// No Windows use: $fp = fopen("COM3", "w");
$fp = fopen($porta, "w");
if (!$fp) {
    echo "Erro ao abrir a porta serial";
    exit;
}

fwrite($fp, $comando);
fclose($fp);

echo "Comando enviado: $comando";
?>
