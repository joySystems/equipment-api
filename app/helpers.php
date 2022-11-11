<?php
  
function checkSerialToFitMask($mask, $serial){

$pattern ="";

$chars = str_split($mask);
foreach($chars as $char){
   switch ($char) {
    case "N":
        $pattern .= '[0-9]';
        break;
    case "X":
        $pattern .= '[A-Z0-9]';
        break;
    case "A":
        $pattern .= '[A-Z]';
        break;
    case "Z":
        $pattern .= '[-_@]';
        break;
    case "a":
        $pattern .= '[a-z]';
        break;
}
}

$pattern = '/'.$pattern.'/';

$result = preg_match($pattern, $serial, $matches, PREG_OFFSET_CAPTURE);

if ($result == 1){

    return true;
}else if ($result == 0){
    return false;
}else{

    return false;
}

    
}
   
