<?php
session_start();

$host = "localhost"; /* Host name */
$user = "wilder1_STOREOWNER"; /* User */
$password = "sdfnjcoaismdieroinasdf"; /* Password */
$dbname = "wilder1_FA21_02CompanyDB"; /* Database name */

$conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if(!$conn){
    die("Error". mysqli_connect_error()); 
} 