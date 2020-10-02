The webinterface runs on a nginx server and php-7.

1. nginx has to be installed

2. Edit //etc/nginx/sites-available/default file:
  
  set root as .../ledstation/web/
  
  set default .php file as led.php
  
  add to file:
  
  location ~ \.php$ {
      include snippets/fastcgi-php.conf;
      fastcgi_pass unix:/run/php/php7.3-fpm.sock;
      }
