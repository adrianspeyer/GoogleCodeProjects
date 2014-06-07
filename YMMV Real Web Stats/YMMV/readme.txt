***************************************************************************
*                                                                         *
*      			__   ____  __ __  ____   __			                      *	
* 		    	\ \ / /  \/  |  \/  \ \ / /                               *  
*  			     \ V /| |\/| | |\/| |\ V / 			                      * 
*   			  |_| |_|  |_|_|  |_| \_/                                 *
*                                                                         *
***************************************************************************
*                                                                         *
*                          Create by Adrian Speyer  			  *
*                      http://www.adrianspeyer.com/                *
*                                                                         *
***************************************************************************

#################################READ ME###################################

#Introduction#

Welcome to YYMV stats. I appreciate you tyring out this script, but 
I especially appreciate feedback by developers/programmers to make this a 
script useful for the whole commnunity. This is why it has been released GPL 
V3.

#Requirements#
You need access to PHP (should work on 4, but it was built on 5)
You need access to be able to copy the HTACCESS file included for security
No need for MYSQl


#Quick Setup & Installation#

1- Unzip the YMMV folder and place it as a subfolder in the root of your site.
The path should be something like www.yoursite.com/YMMV

2- Modify the included .HTACCESS to your domain to protect your information 
from being seen.

3- Modify settings.php found in the Admin folder with your email and create a user name
and password. The email will be used for when you log file gets too large.
User name and password used to keep prying eyes from seeing info. Default is admin and password
is "password".

4- Place the file YMMV.php in the root index.

5- On your index page add: <?php include 'YMMV.php';?> and you'll start seeing 
stats soon after.


#Security#
Information is stored with a flat file system, and I have included  the necessary 
tools to secure your information as long as you use them. I highly recommend you 
use the HTACCESS included. Using any other HTACCESS/HTPASSWD could block access to 
the folder and  could impede your stats from being recorded. 

#FAQ#

Why doesn't Google Analytics line up with my logs?
Google Analytics uses client-side code to gather information, 
(using cookies) whereas our script uses server-side information.


Doesn't this mean the information is not accurate then? How
can I determine the accuracy of my analytics if measurements
from Google and YMMV are not the same?
This is why I have a control log. The control log measures
all hits, and at the same our other script measures the times the 
user would block Google Analytics. In this way you are comparing
Apples to Apples.


Will YMMV work with "this" CMS or "that" forum software?
YMMV should work on any server with PHP 4 or 5. Our goal is
to eventually create plugins for the most popular CMS 
and forum software. I welcome your help if you are a coder to do
so. 

Are there plans to create a MYSQL Verison?
I plan to always offer the flat file system, but I are 
exploring a way to create this with MYSQL and offer more
graphical reporting tools. I welcome help with the project.


#Support#
The beauty of this tool is that includes a troubleshooting capbility. To check for issues
go to www.yourdomain.com/YMMV/troubleshoot. If you have other issues use Github.

