<?php

/**
 * @author kacevnik
 * @copyright 2017
 */

    define(HOST,"localhost");
    define(ADMIN_DB,"joomlamix_zcash");
    define(PASS_DB,"9564665");
    define(NAME_DB,"joomlamix_zcash");
    define(ADMIN_EMAIL,"kacevnik@yandex.ru");
    define(TIMES,time());
    define(ENTER, '1');
    define(URLKA, $_SERVER['HTTP_REFERER']);
    define(IP_USER, $_SERVER['REMOTE_ADDR']);
    define(CAPCHA_URL, 'https://www.google.com/recaptcha/api/siteverify');
    define(SECRET, '');
    
    //Соединение с базой данных.
    
    $db = mysqli_connect(HOST,ADMIN_DB,PASS_DB);
    mysqli_query($db, "SET NAMES 'utf8'");         //Установка кодировки данных из базы.
    mysqli_select_db($db, NAME_DB) or die("Ошибка соединения с базой!");
    
    session_start();

?>