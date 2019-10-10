#include <Ethernet.h>
#include <Adafruit_VC0706.h>
#include <SoftwareSerial.h>
#include <SPI.h>
#include <MQ2.h>
#include "DHT.h"
#define DHTPIN 7  //pin "7" dht                       // Digital Pin input dari dht
#define DHTTYPE DHT11                    // Type DHT Sensors (DHT11/DHT22)
#define relay1 6//lampu1 pin "6"
#define relay2 5//kipas on/off pin "5"
#define speed1 4//kipas speed1 pin "4"
#define speed2 2//kipas speed2 pin "2"
//#define speed3 8//kipas speed3 pin "8"
//#define digital_api 10//input digital api pin "10"
//#define pompaair 11//lampu2/lampu teras pin "11"
#define digital_ldr 3//input digital mq-2 pin "3"
#define lamputeras 9//lampu2/lampu teras pin "9"

SoftwareSerial cameraconnection = SoftwareSerial(0, 1);
Adafruit_VC0706 cam = Adafruit_VC0706(&cameraconnection);

byte mac[] = {  0x00, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
char server_api[] = "api.thingspeak.com";
IPAddress ip(192, 168, 43, 100); //ip arduino
IPAddress server(192, 168, 43, 242); //ip localhost/laptop
byte subnet[] = {255, 255, 255, 0};
EthernetClient client; //arduino sebagai client
//API key for the Thingspeak ThingHTTP already configured
const String apiKey = "5OHLWF8GGHPAENXT";
//the number the message should be sent to
const String sendNumber = "%2B6289669194150";

String value;
DHT dht(DHTPIN, DHTTYPE);

char StrControl[5];
char StrSnap[2];
int Intsnap = 0;
char StrRly[2];
int IntRly = 0;
char StrBts[3];
int IntBts = 0;
boolean startRead = false;
long previousMillis = 0;
long interval = 1;           // Upload-Interval dalam detik
int h;                       // Humidity/Kelembapan
int t;                       // Temperature/suhu
int s;                       // Motion
int stringPos = 0;
boolean snap;
boolean StatusRelay = false;
boolean StatusRelay2 = false;
int pin = A0; //pin A0 untuk mq-2
int lpg, co, smoke;
int jumlah, total;
MQ2 mq2(pin);
int sensorThres = 400;

void setup() {
  interval = interval * 1000 * 1;
  delay(1000);
  pinMode(relay1, OUTPUT);
  pinMode(relay2, OUTPUT);
//  pinMode(digital_api, INPUT);
//  pinMode(pompaair, OUTPUT);
  pinMode(digital_ldr, INPUT);
  pinMode(lamputeras, OUTPUT);
  pinMode(speed1, OUTPUT);
  pinMode(speed2, OUTPUT);
//  pinMode(speed3, OUTPUT);

//  Serial.begin(9600);
  Ethernet.begin(mac, ip);
  mq2.begin();

//  Serial.println(F("**** Smart Home System **** \n"));
//  Serial.print("IP Address        : ");
//  Serial.println(Ethernet.localIP());
//  Serial.print("Subnet Mask       : ");
//  Serial.println(Ethernet.subnetMask());
//  Serial.println(F("Connected!"));

  if (cam.begin()) {
//    Serial.println("Camera Terbaca");
  }
  else {
//    Serial.println("Camera Tidak Terbaca!");
    return;
  }
  char *reply = cam.getVersion();
  //cam.setImageSize(VC0706_160x120);
  cam.setImageSize(VC0706_320x240);  // medium
  cam.setMotionDetect(true);
  if (!cam.getMotionDetect()) {
//    Serial.println("MOTION DETECTOR OFF");
    while(1);
  } else {
//    Serial.println("MOTION DETECTOR ON");
  }
  
}

void loop() {
  if (StatusRelay) {
    digitalWrite(relay1, HIGH);
  }
  else {
    digitalWrite(relay1, LOW);
  }
  if (StatusRelay2) {
    digitalWrite(relay2, HIGH);
  }
  else {
    digitalWrite(relay2, LOW);
  }

  if (cam.motionDetected()) {
//    Serial.println("Motion!");
    s = 1;
    cam.setMotionDetect(false);
    sendpic();
    cam.setMotionDetect(true);
  }
  else {
    s = 0;
  }

  String NilControl = CekControl();
  NilControl.toCharArray(StrSnap, 2, 0);
  NilControl.toCharArray(StrRly, 2, 1);
  NilControl.toCharArray(StrBts, 3, 2);
  Intsnap = atoi(StrSnap);
  IntRly = atoi(StrRly);
  IntBts = atoi(StrBts);

  if (IntBts == 1) {
    StatusRelay2 = false;
  } else if (IntBts == 0) {
    StatusRelay2 = true;
  }

  if (IntRly == 1) {
    StatusRelay = true;
  } else if (IntRly == 0) {
    StatusRelay = false;
  }

  if (Intsnap == 0) {
    s = 0;
  } else if (Intsnap == 1) {
    if (! cam.takePicture()) {
//      Serial.println("Failed to snap!");
    } else {
//      Serial.println("Picture taken!");
      cam.setMotionDetect(false);
      sendpic();
      cam.setMotionDetect(true);
//      Serial.println("Motion Detecton Ready");
      s = 1;
    }
  }
  //===================================================

  /*read the values from the sensor, it returns
  *an array which contains 3 values.
  * 1 = LPG in ppm
  * 2 = CO in ppm
  * 3 = SMOKE in ppm
  */
  float* values= mq2.read(false); //set it false if you don't want to print the values in the Serial
  
  //lpg = values[0];
  lpg = mq2.readLPG();
  //co = values[1];
  co = mq2.readCO();
  //smoke = values[2];
  smoke = mq2.readSmoke();
  jumlah = lpg+co+smoke;
  total = jumlah/3;
  h = dht.readHumidity();
  t = dht.readTemperature();
  if (!h == 0 && !t == 0) {
//    Serial.print(F("Suhu:  "));
//    Serial.println(t);
//    Serial.print(F("Kelembaban: "));
//    Serial.println(h);
//    Serial.println("");
//    Serial.print(F("Gas LPG:  "));
//    Serial.println(lpg);
//    Serial.print(F("Gas CO: "));
//    Serial.println(co);
//    Serial.print(F("Gas Smoke: "));
//    Serial.println(smoke);
//    Serial.print(F("Total: "));
//    Serial.println(total);
//    Serial.println("");
    value = "/backend/InsertValue.php?temp=";
    value += t; //suhu
    value += "&hum=";
    value += h;
    value += "&lpg=";
    value += lpg; //gas lpg
    value += "&co=";
    value += co;
    value += "&smoke=";
    value += smoke;
    value += "&total=";
    value += total;
    value += " HTTP/1.1";
    send_request(t, h,lpg,co,smoke,total);
  }
//===================================================
//Serial.print("suhu :");
//Serial.println(t);
if (t >= 10 && t <= 29) {
  digitalWrite(speed1, LOW);
  digitalWrite(speed2, HIGH);
//  digitalWrite(speed3, LOW);
//  Serial.println("Speed 1 menyala");
  }
else if (t >= 30 && t <= 50)
  {
    digitalWrite(speed2, LOW);
    digitalWrite(speed1, HIGH);
//    digitalWrite(speed3, LOW);
//    Serial.println("Speed 2 menyala");
  }
//  else if (t >= 33 && t <= 35)
//  {
////    digitalWrite(speed3, HIGH);
//    digitalWrite(speed1, LOW);
//    digitalWrite(speed2, LOW);
//
////    Serial.println("Speed 3 menyala");
//  }
  else 
  {
    digitalWrite(speed1, LOW);
    digitalWrite(speed2, HIGH);
//    digitalWrite(speed3, LOW);
//    Serial.println("Speed 1 menyala");
  }
//===================================================
////  Serial.print("Digital Api:");
//  int nil_api =digitalRead(digital_api);
////  Serial.println(nil_api);
//if (nil_api == 1) {
////  Serial.println("Ada api/Pompa menyala");
//  digitalWrite(pompaair, HIGH);
//}
//else if (nil_api == 0) {
////  Serial.println("Tidak ada api/Pompa off");
//  digitalWrite(pompaair, LOW);
//}
//===================================================
//  Serial.print("Digital LDR:");
  int nil_ldr =digitalRead(digital_ldr);
//  Serial.println(nil_ldr);
if (nil_ldr == 1) {
//  Serial.println("Gelap/Lampu menyala");
  digitalWrite(lamputeras, HIGH);
}
else if (nil_ldr == 0) {
//  Serial.println("Terang/Lampu padam");
  digitalWrite(lamputeras, LOW);
}
//===================================================
  int analogSensor = analogRead(pin);
//Serial.print("STATUS GAS:");
//  Serial.println(analogSensor);
  int modeSMS = 1;
//  Serial.println("------------------------------------");

// Checks if it has reached the threshold value
  if (modeSMS == 1 && analogSensor > sensorThres)
  {
  //set up Ethernet:
//  setupEthernet();
  
  //send the sms
//  Serial.println("Sending SMS");
  
  //this function will send the sms
  //the first argument is the number to send to, formatted like this +12345678901
  //the second argument is the body of the text message, which must be within URLEncode()
  sendSMS(sendNumber, URLEncode("Gas"));
  //-------------------------------
  delay(10000);
  }

//===================================================
}

void send_request (int t, int h, int lpg, int co, int smoke, int total) {
  client.stop();
  if (client.connect(server, 80)) {   //ganti 2375 dengan 80 jika port masih standar
//    Serial.println(F("send_request Client Connected"));
//    Serial.print(F("GET "));
//    Serial.println(value);
    client.print("GET ");
    client.println(value);
    client.print("Host: ");
    client.println("192.168.43.242:80");   //ganti 2375 dengan 80 jika port masih standar
    client.println();
  }
  else {
    //Serial.println(F("send_request Connection Failed"));
  }
  client.stop();
  client.flush();
}


void sendpic() {
  cam.takePicture();
  //  delay(100);
  uint16_t jpglen = cam.frameLength();
 // Serial.print("Sending ");
 // Serial.print(jpglen, DEC);
 // Serial.print(" byte image.\n");
  String start_request = "";
  String end_request = "";
  start_request = start_request + "\n" + "--AaB03x" + "\n" + "Content-Disposition: form-data; name=\"picture\"; filename=\"CAM.JPG\"" + "\n" + "Content-Type: image/jpeg" + "\n" + "Content-Transfer-Encoding: binary" + "\n" + "\n";
  end_request = end_request + "\n" + "--AaB03x--" + "\n";
  uint16_t extra_length;
  extra_length = start_request.length() + end_request.length();
  uint16_t len = jpglen + extra_length;
 // Serial.println("Starting connection to server...");
  client.stop();
  client.connect(server, 80);     //ganti 2375 dengan 80 jika port masih standar
  // Connect to the server, please change your IP address !
  if (client.connected()) {
   // Serial.println(F("Connected!"));

    //HTTP header
    client.println(F("POST /backend/UploadImage.php HTTP/1.1"));
    client.println(F("Host: 192.168.43.242:80"));    //ganti 2375 dengan 80 jika port masih standar
    client.println(F("Content-Type: multipart/form-data; boundary=AaB03x"));
    client.print(F("Content-Length: "));
    client.println(len);

    //Form data
    client.print(F("\n"));
    client.print(F("--AaB03x"));
    client.print(F("\n"));
    client.print(F("Content-Disposition: form-data;"));
    client.print(F(" name=\"picture\"; filename=\"CAM.JPG\""));
    client.print(F("\n"));
    client.print(F("Content-Type: image/jpeg"));
    client.print(F("\n"));
    client.print(F("Content-Transfer-Encoding: binary"));
    client.print(F("\n"));
    client.print(F("\n"));

  //  Serial.println("Now sending data:");

    // Read all the data up to # bytes!
    byte wCount = 0; // For counting # of writes
    while (jpglen > 0) {

      uint8_t *buffer;
      uint8_t bytesToRead = min(64, jpglen); // change 32 to 64 for a speedup but may not work with all setups!
      buffer = cam.readPicture(bytesToRead);
      client.write(buffer, bytesToRead);
      if (++wCount >= 64) { // Every 2K, give a little feedback so it doesn't appear locked up
      //  Serial.print('.');
        wCount = 0;
      }
      jpglen -= bytesToRead;
      //      delay(100);
    }
    client.print(end_request);
    client.println();
   // Serial.println("Transmission over. \r\n Waiting for the next loop. \r\n");
    cam.reset();
  }
  client.stop();
}

String CekControl() {
  //Serial.println("connecting…");
  if (client.connect(server, 80)) {    //ganti 2375 dengan 80 jika port masih standar
    //Serial.println("--> CONNECTED");
    client.println("GET /backend/CekControl.php HTTP/1.1");
    client.print( "Host: ");
    client.println("192.168.43.242");
    client.println();
    return GetControl();
  } else {
    return "connection failed";
  }
}

String GetControl() {
  stringPos = 0;
  memset( &StrControl, 0, 3 );
  while (true) {
    if (client.available()) {
      char c = client.read();
      if (c == '<' ) { //'<' is our begining character
        startRead = true;
      } else if (startRead) {
        if (c != '>') {
          StrControl[stringPos] = c;
          stringPos ++;
        } else {
          startRead = false;
          client.stop();
          client.flush();
          //Serial.println("disconnecting...");
          return StrControl;
        }
      }
    }
  }
}

//-----------------------------------
void sendSMS(String number,String message)
{
  // Make a TCP connection to remote host
  if (client.connect(server_api, 80))
  {

    //should look like this...
    //api.thingspeak.com/apps/thinghttp/send_request?api_key={api key}&number={send to number}&message={text body}

    client.print("GET /apps/thinghttp/send_request?api_key=");
    client.print(apiKey);
    client.print("&number=");
    client.print(number);
    client.print("&message=");
    client.print(message);
    client.println(" HTTP/1.1");
    client.print("Host: ");
    client.println(server_api);
    client.println("Connection: close");
    client.println();
  }
  else
  {
//    Serial.println(F("Connection failed"));
  } 

  // Check for a response from the server, and route it
  // out the serial port.
  while (client.connected())
  {
    if ( client.available() )
    {
      char c = client.read();
//      Serial.print(c);
    }      
  }
//  Serial.println();
  client.stop();
}



//void setupEthernet()
//{
////  Serial.println("Setting up Ethernet...");
//  // start the Ethernet connection:
//  if (Ethernet.begin(mac) == 0) {
////    Serial.println(F("Failed to configure Ethernet using DHCP"));
//    // no point in carrying on, so do nothing forevermore:
//    // try to congifure using IP address instead of DHCP:
//    Ethernet.begin(mac, ip);
//  }
////  Serial.print("My IP address: ");
////  Serial.println(Ethernet.localIP());
//  // give the Ethernet shield a second to initialize:
//  delay(1000);
//}

String URLEncode(const char* msg)
{
  const char *hex = "0123456789abcdef";
  String encodedMsg = "";

  while (*msg!='\0'){
    if( ('a' <= *msg && *msg <= 'z')
      || ('A' <= *msg && *msg <= 'Z')
      || ('0' <= *msg && *msg <= '9') ) {
      encodedMsg += *msg;
    } 
    else {
      encodedMsg += '%';
      encodedMsg += hex[*msg >> 4];
      encodedMsg += hex[*msg & 15];
    }
    msg++;
  }
  return encodedMsg;
}
