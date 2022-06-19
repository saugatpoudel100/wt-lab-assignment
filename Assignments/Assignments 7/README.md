 DATE -> 2022/06/19 - 2020/06/20 (7pm)
 
Creating a Virtual Hosts

 costom domain like

http://Hello.local
http://second.local
Find path to xaamp and C:\xampp\apache\conf\extra and open filename httpd-vhosts.conf and Change DocumentRoot and ServerName accordingly

<VirtualHost *:80>
   DocumentRoot "C:\xampp\htdocs\Github\wt-lab-assignment\Assignments\Assignments 7\Hello
"
   ServerName Hello.local
</VirtualHost>
<VirtualHost *:80>
   DocumentRoot "C:\xampp\htdocs\Github\wt-lab-assignment\Assignments\Assignments 7\second
"
   ServerName second.local
</VirtualHost>

Go to path C:\Windows\System32\drivers\etc to edit host file

        note : Your system cannot allow yo to edit directly there so make sure that you copy it to different location and have an extra original copy in any case
Let edit :

# localhost name resolution is handled within DNS itself.
# 127.0.0.1       localhost
# ::1             localhost

# lets resolve ip to localhost first
 127.0.0.1       localhost
 # And then the ip's to our costom domain
  127.0.0.1       Hello.local
 127.0.0.1       second.local

Apache
 Apache Xampp is an open source tool used for running PHP or PERL Web applications locally using a Web server. It is available for all major operating systems and is popular with Windows users to locally build and test their Web apps. In this tutorial, we will explore how to get started with Xampp. In the process, we shall create and run our own Web application in PHP, and use MySQL databases with the help of the PHPMyAdmin tool.

Xampp is a free and open source cross-platform Web server solution