<h1 align="center">
  <br>
  <a href="https://sudorealm.com"><img src="https://i.imgur.com/1XhD623.png" alt="Markdownify" width="200"></a>
  <br>
  Sudorealm
  <br>
</h1>

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

## Needed Installations

```
apt-get update
apt-get upgrade
```

You may need to install these following services if they are not already installed in your Kali Box. 

### **DNSmasq**
```
apt-get install dnsmasq -y
```

### **Hostapd**
```
apt-get install hostapd
```

## Libraries 📚

- [Parsley.js](https://parsleyjs.org/)



## Contribution

You are more than welcome to expand this repo by constructing your own captive portal designs, thus making this repo a cool library of Evil Twin Captive Portals for every use case scenario in the world! 🤘🌎❤

## Support this Nerd

My name is Thanos, and I also go by the hacker handle **d3ad_R1nger** if you like my work you can support me on **BuyMeACoffee**


<a href="https://www.buymeacoffee.com/ZixcW8N" target="_blank">
    <img src="https://cdn.buymeacoffee.com/buttons/v2/default-violet.png" 
        alt="drawing" 
        width="200"
/></a>

Follow me here on **[Github](https://github.com/athanstan)** and/or on **[Twitter @DevThanos](https://twitter.com/DevThanos)** for more news about my coding/hacking adventures.
