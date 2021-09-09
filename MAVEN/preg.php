<?php 
   $string="BANANA Is a fruit";
   $pattern="/A*/i";
   preg_match($pattern,$string,$matches);
   print_r($matches);?>