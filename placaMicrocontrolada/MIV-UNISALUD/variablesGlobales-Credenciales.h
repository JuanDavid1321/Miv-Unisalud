const char* ssid     = "PC-JUAN-DAVID-C";      // SSID
const char* password = "Juancho1321";      // Password .000webhostapp.com

const char* host = "192.168.137.1";  // Dirección IP local o remota, del Servidor Web .000webhostapp.com
const int   port = 80;            // Puerto, HTTP es 80 por defecto, cambiar si es necesario.

String url = "/farmaciaUnidadSalud-Xampp/dispositivoIoT/envioBD.php";

unsigned long previousMillis = 0;

DHT dht(13, DHT11);

float umbralTemperatura, umbralHumedad, t, h;
bool bandera;

// Credencias del bot

const unsigned long BOT_MTBS = 1000; // mean time between scan messages

// Telegram BOT Token (Obtenido del Botfather)
#define BOT_TOKEN "6031134526:AAEaeWdPB70dNUbjstq75DatLnfyft5WXlM"

// ID del celular
String chat_id = "1135952709";

WiFiClientSecure secured_client;

UniversalTelegramBot bot(BOT_TOKEN, secured_client);

unsigned long bot_lasttime; // last time messages' scan has been done

