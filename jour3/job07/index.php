<?php

$str="Certaines choses changent, et d'autres ne changeront jamais.";

$new_str="";

for($i = 0; isset($str[$i]) == true; $i++){
    if($i==59){
        $new_str = $new_str . $str[0];

    }else {
        $new_str = $new_str . $str[$i + 1];
    }
}

echo $new_str;
                
?> 