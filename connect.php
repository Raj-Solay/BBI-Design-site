<?php

$host = "localhost"; /* Host name */
$user = "bizbullsuser"; /* User */
$password = "wO@^GG_f~ufy"; /* Password */
$dbname = "bizbulls"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}