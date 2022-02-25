<?php
$lanG = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
//echo $lanG;
function getlanguage(){
    $lanG = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
    return $lanG;
}
$lanG_usuario = getlanguage();

if($lanG_usuario == "es"){
    require_once 'ES.php';
}
elseif($lanG_usuario == "en"){
        require_once 'EN.php';
}
elseif($lanG_usuario == "zh"){
        require_once 'ZH.php';
}
else{
        require_once 'EN.php';
}