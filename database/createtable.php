<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// DB Connection info 
$host = "localhost";
$user = "root";
$pwd = "meowtriciaHax!";
$db = "LINC_DB";
try {
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE client_services (
        client_id int NOT NULL,
        PRIMARY KEY (client_id),
        service_type varchar(30) NOT NULL,
        inv_date date,
        inv_num int,
        ref_date date NOT NULL,
        intake_date date,
        status varchar(10) NOT NULL,
        coordinator varchar(4),
        units int NOT NULL)";
    $conn->query($sql);
} catch (Exception $ex) {
    die(print_r($ex));
}
echo "<h3>Client Services Table Created</h3>";