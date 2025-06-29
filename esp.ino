void setup() {
  Serial.begin(9600);         // Comunicação serial
  pinMode(2, OUTPUT);         // GPIO2 = LED azul interno
  digitalWrite(2, HIGH);      // Desligado (inverso)
}

void loop() {
  if (Serial.available()) {
    String comando = Serial.readStringUntil('\n');
    comando.trim(); // remove espaços e \r\n

    if (comando == "ligar") {
      digitalWrite(2, LOW);   // Liga o LED azul (inverso)
      Serial.println("LED ligado");
    } else if (comando == "desligar") {
      digitalWrite(2, HIGH);  // Desliga o LED
      Serial.println("LED desligado");
    } else {
      Serial.println("Comando inválido");
    }
  }
}
