# smarthome
I have made a prototype of Smart Home using Arduino Uno R3 and Raspberry pi 3 Model B.

In a home prototype that I made
I put DHT11, LDR sensor, flame sensor,
MQ-2 Sensor, fan with 2 speed (AC), webcam usb,
water pump mini.

The following is the function:

1. when there are a motion is detected by webcam, it will be captured, saved, and send a email notification to user and it send the file of image that captured.

2. when MQ-2 sensor is detecting a smoke or LPG, it will send a notification that smoke or LGP has detected by SMS to user.

3. when the outdoor lamp is detecting a sun bright, the lamp will be OFF, if the darkness is coming, the lamp will be ON.

4. when flame sensor is detecting a fire, the water pump mini will be active to push a water from water source.

5. you can turn ON or OFF lamp and Fan by button on website that i have made, XAMPP must be running to access that website.

6. There are also has automation speed of fan with 2 speed, if the temperature 10° C - 29° C, the speed 1st will active. if the temperature 30° C - 50° C, the speed 2nd will active.

7. and if you want to access the local website over the internet, you have to connect with VPN that WebServer are using.
