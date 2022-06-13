# The installation guide

## * Set up the server side with XMAPP
## * Create table
## * Clone this repository
## * Start the application



### Set up the server side:
#### Intstall the XMAPP
It is easy to install, just go to install the install package at [XMAPP's download page](https://www.apachefriends.org/zh_tw/download.html).
If there is still problem on installing it. I suggest you go to this tutorial.👉[Go here](https://www.youtube.com/watch?v=BJx4eknf7jM&list=PLwIFDX7xv6k0DFTPpu1wTr8cuc2VC91bW
) 
After finishing installing it, I had some problem on the permission of it. There is a way to solve it.👉[Go here](https://errerrors.blogspot.com/2018/11/how-to-fix-cannot-create-file-xampp-control-ini.html)👈 It is actually just giving XMAPP a permission to write-in. On my computer the default setting didn't give the write-in permission to it. And it will crash when I quit XMAPP.

So, now we should have the XMAPP installed. And we now have to open the XMAPP control panel and turn on the Apache and MySQL.
![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/xmapp1.png)
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/xmapp1.png" width="800" height="400">

And then go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) on your browser and create a database call ```chat```.
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/dbimg1.png" width="800" height="400">

Then set up two tables name ```users```, and ```messages```. For ```users``` needs to set up `7` columns. And ```messages``` with `4` columns. And the elements are show below.

<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/dbimg2.png" width="800" height="400">
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/dbimg3.png" width="800" height="400">
👇This is the elements👇
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/dbimg5.png" width="800" height="400">
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/dbimg7.png" width="800" height="400">

After setting the users table, there is still some setting. Press the ```GO``` button below. And create a new column call `status` after `img`. 
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/dbimg4.png" width="800" height="400">
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/dbimg6.png" width="800" height="400">



### Now we have to clone the repository:
Make sure your `git` is ready. Go to the location your install the xmapp.
For example, I install it at `D:`. So my location is `D:\xampp\htdocs`.

Go to the location and clone the repository.
type `git clone https://github.com/GGbby/Open-source-project---chat-application-webpage.git`




### Now you should have the whole stuff ready:
Go to a browser. And go to the localhost of this project. It should be like:`http://localhost/Open-source-project---chat-application-webpage/`
<img src="https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/chatapp/manuals/directory/pic/onb1.png" width="800" height="400">

Now join the app, explore yourself or go to our [Users manual](manuals\directory\Users manual.md)