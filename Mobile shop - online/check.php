<?php

$pass = '7530';
$enc_pass = '%^&*#@';
$symbols = array(')', '!', '@', '#', '$', '%', '^', '&', '*', '(');

for ($i=0; $i!=strlen($pass); $i++){
    $enc_pass .= $symbols[$pass[$i]];
}

echo $enc_pass;

$mainpass = '';

for ($i=6; $i!=strlen($enc_pass); $i++){
    $mainpass .= array_search($enc_pass[$i],$symbols);
}

echo '<br>'.$mainpass;

?>