
# unpack.php

2012 by Tim Pietrusky
      
free for all and everything, just buy me a beer (_pretty please_)!


## Problem
> you can access a webspace only via ftp. and you can not unpack the archive with your ftp client :(


## Three (3) quick steps to solve your problem



1. pack your files from the root directory of your page.
     
       e.g. `/var/www/localhost/<your_page_files>`
       
       -> you pack your files from `/var/www/localhost`:
     
       `tar -czf unpack.tgz <your_folder_1>/ <your_folder_2>/ <your_file.php>`

2. upload this file (e.g. unpack.php) plus your archive (e.g. unpack.tgz) to your webspace root folder (e.g. htdocs or wtf) with your ♥ ftp tool 

3. switch to your browser and hit `http://example/unpack.php` and wait... your done!
        
	[optional] archive | e.g. `http://example/unpack.php?archive=<your_archive.tgz>`
