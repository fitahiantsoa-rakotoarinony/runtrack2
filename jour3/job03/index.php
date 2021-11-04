<?php

$str="i'm sorry Dave i'm afraid i can't
do that ";
$i=0;
while( isset($str[$i])==true){
   if($str[$i]=="a"||$str[$i]=="e"||$str[$i]=="i"||$str[$i]=="o"||$str[$i]=="u"||$str[$i]=="y"){
      echo $str[$i]  ;

   }
   
  $i++;
} 
                
?> 