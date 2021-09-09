<?php 
   session_start();
   ?>
   <!DOCTYPE html>
   <html>
   <body>
   <?php 
     echo "NAME IS". $_SESSION['uname'];?>
   
   <?php 
       session_destroy();?>
     </body>
     </html>