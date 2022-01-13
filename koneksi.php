<?php
$serverName = "DESKTOP-0R3L9VB"; //serverName\instanceName



// Since UID and PWD are not specified in the $connectionInfo array,

// The connection will be attempted using Windows Authentication.

$connectionInfo = array( "Database"=>"dbResto");

$koneksi = sqlsrv_connect( $serverName, $connectionInfo);



if( !$koneksi ) {

     echo "Connection could not be established.<br />";

     die( print_r( sqlsrv_errors(), true));   
}




?>