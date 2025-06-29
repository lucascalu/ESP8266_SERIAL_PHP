<!DOCTYPE html>
<html>
<head>
    <title>Controle do LED Azul - ESP8266</title>
</head>
<body>
    <h1>Controle do LED Azul (via Serial)</h1>

    <form action="led.php" method="get">
        <input type="hidden" name="cmd" value="ligar">
        <button type="submit">Ligar LED</button>
    </form>

    <form action="led.php" method="get">
        <input type="hidden" name="cmd" value="desligar">
        <button type="submit">Desligar LED</button>
    </form>
</body>
</html>
