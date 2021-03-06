# The installation guide

1. Set up the server side with XMAPP
2. Create table
3. Clone this repository
4. Start the application

### Set up the server side:
#### Intstall the XMAPP
It is easy to install, just go to install the install package at [XMAPP's download page](https://www.apachefriends.org/zh_tw/download.html).
If there is still problem on installing it. I suggest you go to this tutorial.๐[Go here](https://www.youtube.com/watch?v=BJx4eknf7jM&list=PLwIFDX7xv6k0DFTPpu1wTr8cuc2VC91bW
) 
After finishing installing it, I had some problem on the permission of it. There is a way to solve it.๐[Go here](https://errerrors.blogspot.com/2018/11/how-to-fix-cannot-create-file-xampp-control-ini.html)๐ It is actually just giving XMAPP a permission to write-in. On my computer the default setting didn't give the write-in permission to it. And it will crash when I quit XMAPP.

So, now we should have the XMAPP installed. And we now have to open the XMAPP control panel and turn on the Apache and MySQL.
![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/xmapp1.png)

And then go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) on your browser and create a database call ```chat```.

Or download the chat-table and input to XMAPP [Download file](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/chat.sql)


![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/dbimg1.png)


Then set up two tables name ```users```, and ```messages```. For ```users``` needs to set up `7` columns. And ```messages``` with `4` columns. And the elements are show below.

![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/dbimg2.png)
![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/dbimg3.png)
๐This is the elements๐
![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/dbimg5.png)

![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/dbimg7.png)

After setting the users table, there is still some setting. Press the ```GO``` button below. And create a new column call `status` after `img`. 
![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/dbimg4.png)
![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/pic/dbimg6.png)


### Now we have to clone the repository:
Make sure your `git` is ready. Go to the location your install the xmapp.
For example, I install it at `D:`. So my location is `D:\xampp\htdocs`.

Go to the location and clone the repository.
type `git clone https://github.com/GGbby/Open-source-project---chat-application-webpage.git`

### Now you should have the whole stuff ready:
Go to a browser. And go to the localhost of this project. It should be like:`http://localhost/Open-source-project---chat-application-webpage/src`
![](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/93a7964d6067d8a0d3e72980a924b1c1292e3dee/doc/manuals/directory/pic/onb1.png)

### Now join the app, explore yourself or go to our [Users manual](https://github.com/GGbby/Open-source-project---chat-application-webpage/blob/main/doc/manuals/directory/Users%20manual.md)
