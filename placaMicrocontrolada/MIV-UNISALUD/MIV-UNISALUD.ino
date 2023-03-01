#include <DHT.h>
#include <WiFi.h>
#include <WiFiClient.h>
#include <UniversalTelegramBot.h>
#include <WiFiClientSecure.h>
#include "variablesGlobales-Credenciales.h"
#include "envioBaseDatos.h"
#include "conexionWifi.h"
#include "modeloBOT.h"

void setup() {

  Serial.begin(115200);
  dht.begin();

  umbralTemperatura = 8.0;
  umbralHumedad = 45.0;

  bandera = true;

  // Llamado al método para establecer parámetros de conexión
  configuracionWifi();

  // Llamado al método para inicio del sistema
  inicioSistema();
  
}

void loop() {
  
  t = dht.readTemperature();
  h = dht.readHumidity();

  if(t > umbralTemperatura && bandera == true){
    bot.sendMessage(chat_id, "🌡Umbral de temperatura superado🌡", "");
  }

  if(h > umbralHumedad && bandera == true){
    bot.sendMessage(chat_id, "💧Umbral de humedad superado 💧", "");
  }

  unsigned long currentMillis = millis();

  if (currentMillis - previousMillis >= 10000) { //envia el nivel de agua cada 10 segundos
    previousMillis = currentMillis;
    Serial.println(t);
    Serial.println(h);
    String urlDatos = "temp=" + String(t) + "&hum=" + String(h);

    // Llamado al método para insertar datos
    enviarDatosTemperaturaHumedad(urlDatos);
  }

  if (millis() - bot_lasttime > BOT_MTBS)
  { 
      int numNewMessages = bot.getUpdates(bot.last_message_received + 1); 
      
      while (numNewMessages) { 
        Serial.println("got response");
        handleNewMessages(numNewMessages); 
        numNewMessages = bot.getUpdates(bot.last_message_received + 1);
      } 
      
      bot_lasttime = millis(); 
  } 
  
}
