# Evil Twin Attack With Captive Portal 
## Mainly, for WiFi Social Engineering and credential theft. 

This repo contains various Designs of Captive Portals for your Evil Twin/Fake Access Point Attacks.

![Evil Twin Attack with Captive Portal for WiFi credential theft.](https://i.imgur.com/YRhKYuT.png)

## How To Guide
I have written a really thorough guide on how to implement this attack on a Kali Linux machine running on VirtualBox on Windows 10. 


**[Guide on Sudorealm](https://sudorealm.com/blog/evil-twin-attack-guide)**

### Inside the Guide you will learn a great deal of techniques
---
**Like**: 

- Simple Reconnaissance.
- Setting up your own Access Point with ***hostapd***.
- Distribute ips on connected hosts with ***dnsmasq***.
- Provide connected users with internet with ***iptables***.
- Write your own Rewrite rules on the ***Apache2 configurations***.
- Setup a cool captive portal, with modern Front-End techniques
    - Bootstrap
    - jQuery
    - Client-Side Form validation with Parsley.js Library
- Store credentials to local MySQL Database
