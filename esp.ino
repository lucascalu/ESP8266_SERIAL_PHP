void setup() {
  Serial.begin(9600);         // Comunicação serial
  pinMode(4, OUTPUT);         // GPIO2 = LED azul interno
  
}

void loop() {
  if (Serial.available()) {
    String comando = Serial.readStringUntil('\n');
    comando.trim(); // remove espaços e \r\n

    if (comando == "ligar") {
      digitalWrite(4, HIGH);   // Liga o LED azul 
      Serial.println("LED ligado");
    } else if (comando == "desligar") {
      digitalWrite(4, LOW);  // Desliga o LED
      Serial.println("LED desligado");
    } else {
      Serial.println("Comando inválido");
    }
  }
}
