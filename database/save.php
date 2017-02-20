<!DOCTYPE html>
<html>
    <head>
        <title>LINC Database</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Save new client to database function</h1>
    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//DB Connection info
$server = "localhost";
$user = "root";
$pwd = "meowtriciaHax!";
$db = "LINC_DB";
$connect=mysql_connect($server, $user, $pwd);

if(!connect) {
    die('Connection Failed: '.mysql_error());
}
else {
    mysql_select_db($db, $connect);
}

//Database table info
$table = "clientinfo";
$insertClientInfo = "INSERT INTO $table(emp_fn, emp_ln,emp_email, emp_company) VALUES('$_POST[empFirstName]', '$_POST[empLastName]', '$_POST[empEmail]', '$_POST[company]')";
try {
    mysql_query($insertClientInfo, $connect);
} catch (Exception $ex) {
    die('Error: '.  \mysql_error());
}
?>
</body>
</html>