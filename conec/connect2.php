<?php
define('DB_HOST','localhost');
define('DB_NAME', 'u660704090_salvadorclick');
define('DB_USER', 'u660704090_salvadorclick');
define('DB_PASSWD','Umareka2');
$conn2 = mysqli_connect( DB_HOST , DB_USER , DB_PASSWD, DB_NAME );
if(!$conn2){
    die('Erro na conexão: '.mysqli_connect_error());
}