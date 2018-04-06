<?php

header("Content-type: text/html; charset=utf-8");

if((!isset($_COOKIE['lang'])) || (empty($_COOKIE['lang']))) {
     
    include('pt.php');
     
}else {
     
    if($_COOKIE['lang'] == 'en') {
         
        include('en.php');
         
    }elseif($_COOKIE['lang'] == 'pt') {
         
        include('pt.php');
         
    }elseif($_COOKIE['lang'] == 'ru') {
         
        include('ru.php');
         
    }

}

?>
