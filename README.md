# pizero-epaper-greetings
## Automatically change the greeting displayed on the Raspberry Pi e-Paper display based on web input

This is a follow-on idea to my ugly Christmas sweater accessory https://github.com/DennisFaucher/pizero-epaper-movie. The rotating movie stills are cute, but i wanted to make an interactive piece of wearable art. The major issue was "How to gather input?" I failed in many ways before landing on something that worked. 

 1) Email automation. Fail. Python could not authenticate to cranky, secure gMail. Example here: https://repl.it/talk/learn/How-to-Make-a-Python-Email-Bot/8194
 
 2) Twitter automation. Success, but I would have to be following everyone who wanted to send a greeting which I don't. Example here: https://github.com/dataquestio/twitter-scrape 
 
 3) IFTTT SMS to DropBox to shell script automation. Fail. Requires my Pi to have a public FQDN which it does not. Example here: https://www.raspberrypi.org/forums/viewtopic.php?t=166529
 
 4) Android Tasker SMS kicking off rexec. Fail. Tasker seems to have forgotten how to read SMS. 
 
 5) Web form that wites to a file to be picked up my the rpPi. Success. This is the method I will detail.
 
 ## Hardware
 Raspberry Pi Zero W. WITH PINS as I am terrible at soldering. I purchased mine here: https://www.aliexpress.com/item/32979703845.html

Waveshare 2.13" e-Paper Dsiplay HAT. I purchased mine here: https://www.aliexpress.com/item/32810080308.html
 
 ## Software
 Install Raspbian OS from here https://www.raspberrypi.org/downloads/raspbian/ and use these instructions: https://www.raspberrypi.org/documentation/installation/installing-images/README.md

Connect your Raspberry Pi Zero to keyboard, mouse, HDMI monitor and power to run through the usual Linux setup. I picked up all the necessary cable/power accesories here: https://www.sparkfun.com/products/14298

Install the Waveshare e-Paper drivers using these instructions: https://www.waveshare.com/wiki/2.13inch_e-Paper_HAT. Rename the awfully named directory "RaspberryPi&JetsonNano" to just "Pi".

