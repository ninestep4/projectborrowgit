<?php

$serverName = '10.101.247.1';
$connectionInfo = ['Database' => 'data_borrow', 'UID' => 'sa', 'PWD' => 'cpwsql@2018', 'CharacterSet' => 'UTF-8'];
$conn = sqlsrv_connect($serverName, $connectionInfo);
if (!$conn) {
    echo 'Connection could not be established.<br />';
    die(print_r(sqlsrv_errors(), true));
}
date_default_timezone_set('Asia/Bangkok');
