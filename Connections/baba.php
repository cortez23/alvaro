<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_baba = "localhost";
$database_baba = "baba";
$username_baba = "baba";
$password_baba = "123";
$baba = mysql_pconnect($hostname_baba, $username_baba, $password_baba) or trigger_error(mysql_error(),E_USER_ERROR); 
?>