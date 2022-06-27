<?php
// define('DB_SERVER','localhost');
// define('DB_USER','bizbullsuser');
// define('DB_PASS' ,'wO@^GG_f~ufy');
// define('DB_NAME', 'bizbulls');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// if (mysqli_connect_errno())
// {
 // echo "Failed to connect to MySQL: " . mysqli_connect_error();
// } 



/*define('DB_SERVER','localhost');
define('DB_USER','beurboss_site_user');
define('DB_PASS' ,'1Q@w3e4r5t6y7u8i9o0p');
define('DB_NAME', 'beurboss_site_design');*/
//mocha3036.mochahost.com
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'123');
define('DB_NAME', 'site_design');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
