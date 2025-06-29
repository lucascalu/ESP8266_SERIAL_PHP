<!DOCTYPE html>
<html>
<head>
    <title>Controle do LED Azul - ESP8266</title>
</head>
<body>
    <h1>Controle do LED Azul (via Serial)</h1>
    <button onclick="enviar('ligar')">Ligar LED</button>
    <button onclick="enviar('desligar')">Desligar LED</button>

    <script>
        function enviar(cmd) {
            fetch("led.php?cmd=" + cmd)
                .then(res => res.text())
                .then(txt => alert(txt));
        }
    </script>
</body>
</html>
