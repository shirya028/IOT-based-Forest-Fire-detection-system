#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <DHT.h>
#define DHTPIN D4
#define DHTTYPE DHT11

DHT dht(DHTPIN, DHTTYPE);
WiFiClient client;
const char* ssid = "shreeyash";
const char* password = "123456789";
 
const char* serverName = "http://forest-fire-detection-iot.000webhostapp.com//post-data.php";
 
String apiKeyValue = "";//main pagefor eg:-#54321
String apiKeyValue2 = "";//dashboardeg:-12345
 
String sensorName = "Fire sensor";
String sensorLocation = "Rit";
int smoke_val=0;

void setup() {

  Serial.begin(115200);
  
  WiFi.begin(ssid, password);
  Serial.println("Connecting to the Wifi Network");
  while(WiFi.status() != WL_CONNECTED) { 
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("WiFi is Connected at this IP Address : ");
  Serial.println(WiFi.localIP());
  dht.begin();
  setDashboard();
}
 
void loop() {
  

  if(WiFi.status()== WL_CONNECTED){
    float temperature = dht.readTemperature();
  float humidity = dht.readHumidity();
    HTTPClient http;
    
    http.begin(client,serverName);
    
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
   if (isnan(temperature) || isnan(humidity)) {
    Serial.println("Failed to read from DHT sensor!");
    temperature=0.0;
    humidity=0.0;
  }
  
    smoke_val = analogRead(A0);
    
  
    // Prepare your HTTP POST request data
    String httpRequestData = "api_key=" + apiKeyValue + "&SensorData=" + sensorName
                          + "&LocationData=" + sensorLocation + "&value1=" + temperature
                          + "&value2=" + humidity+ "&value3=" + smoke_val + "";
     //String httpRequestData ="api_key=#54321&SensorData=distance sensor&LocationData=Aicpecf-office&value1=NULL&value2=NULL&value3=NULL";
    Serial.print("httpRequestData: ");
    Serial.println(httpRequestData);
    
 
    int httpResponseCode = http.POST(httpRequestData);
     
 
    if (httpResponseCode>0) {
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode);
    }
    else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode);
    }
 
    http.end();
  }
  else {
    Serial.println("WiFi Disconnected");
  }
  delay(2000);  
}

void setDashboard()
{
  String location = "Rit ";
  String status="active";
  String current_status="normal";
 
    if(WiFi.status()== WL_CONNECTED){
    HTTPClient http1;
    
    http1.begin(client,serverName);
    
    http1.addHeader("Content-Type", "application/x-www-form-urlencoded");
   
    // Prepare your HTTP POST request data
    String httpRequestData1 = "api_key=" + apiKeyValue2 + "&location=" + location
                          + "&status=" + status + "&current_status=" + current_status
                          + "";
     //String httpRequestData ="api_key=#54321&SensorData=distance sensor&LocationData=Aicpecf-office&value1=NULL&value2=NULL&value3=NULL";
    Serial.print("httpRequestData1: ");
    Serial.println(httpRequestData1);
    
 
    int httpResponseCode1 = http1.POST(httpRequestData1);
     
 
    if (httpResponseCode1>0) {
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode1);
    }
    else {
      Serial.print("Error code: ");
      Serial.println(httpResponseCode1);
    }
 
    http1.end();
  }
  else {
    Serial.println("WiFi Disconnected");
  }
}
