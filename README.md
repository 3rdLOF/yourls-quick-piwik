Quick Piwik Plugin
====================

Plugin for [YOURLS](http://yourls.org). 

Description
-----------
A quick and simple plugin for Piwik based on the lastest version. 

### DO NOT ACTIVATE UNTIL YOU READ BELOW!

Installation
------------
1. Clone this repo or download and unzpip in the plugins folder in your Yourls installation. 
2. Login to Piwik, go to Administration >> Websites and get the tracking code for the site you want to track.


   ![image](http://s25.postimg.org/4809pqtsv/tracking.jpg)
   
   
   
   In the tracking code you will find that URL and the ID for the installation of this plug-in.


  
   ![image](http://s25.postimg.org/nh1xti3bz/tracking2.jpg)  

   
3. Open the plugin.php file and enter the URL where it says "ENTER YOUR PIWIK URL HERE" and the site ID where it says "ENTER YOUR SITE ID HERE". Notice you must do this ***TWICE*** on the file. 
4. Save the file, go to your YOURLS administration and install the plugin as usual. If something goes wrong you probably pasted extra characters or deleted some by accident. Check it and fix. 
5. If the plugin installs fine, go back to your PIWIK installation and reload that site's dashboard. If it is working you will see all the widgets load normally. 
6. Kiss somebody. It is always a good way to go about things. 

Local Only
----------
I have no tested this with remote sites, that is where YOURLS and PIWIK are installed in different servers, which is often not the case. Just be aware of this.

License
-------
Free software. Do whatever the hell you want with it.
YOURLS is released under the [MIT license](LICENSE.md)
