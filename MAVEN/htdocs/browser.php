<?php
   $string="The rain in SPAIN is vain";
   $pattern="/ain/i";
   if(preg_match_all($pattern,$string,$matches)){
   	print_r($matches);
   }?>