<?php
$txt='';
for ($i=1; $i < 10; $i++) {
   $lig = '';
   for ($j=1; $j <= $i; $j++) {
      $lig.='*';
   }
   echo $lig."\n";
}
echo 'ceci est une demi-pyramide';