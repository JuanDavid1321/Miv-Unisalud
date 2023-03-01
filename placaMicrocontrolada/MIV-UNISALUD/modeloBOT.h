#include "esp32-hal-gpio.h"

void inicioSistema(){
  String mensajeInicio = "🛠 Inicio de sistema, bienvenido 🛠 \n";
    mensajeInicio += "\n";
    mensajeInicio += "Sistema conectado a la red: \n";
    mensajeInicio += "\n";
    mensajeInicio += ssid;
    mensajeInicio += "\n";
    mensajeInicio += "\n";
    mensajeInicio += "⚠ Recuerde escribir 'ok' para detener alertas ⚠";
    mensajeInicio += "\n";
    
  bot.sendMessage(chat_id, mensajeInicio, "Markdown");

  delay(5000);
}

void handleNewMessages(int numNewMessages)
{
  Serial.print("handleNewMessages ");
  Serial.println(numNewMessages);
  for (int i = 0; i < numNewMessages; i++)
  {
    String chat_id = bot.messages[i].chat_id;
    String text = bot.messages[i].text;

    String from_name = bot.messages[i].from_name;
    if (from_name == "")
      from_name = "Guest"; 
      
    if (text == "ok") {
      
      bandera = false; 
  
    } 
  } 
}
