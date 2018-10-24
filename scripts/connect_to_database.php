<?php
//php my admin credentials- define constants case insensitive
define("hostname","localhost",true);
define("password","",true);
define("username","root",true);
//db being accessed- case sensitive
define("db","assets");
//connect to mysql server and database
$connectionToDatabase = mysqli_connect(hostname,username,password,db);
if ($connectionToDatabase) {
  echo "<strong><h3 style='color:lightgreen;text-align:center;border: 3px solid #73AD21;padding:10px''>Connection To Database Was Successful</h3></strong><br/>";
}else {
  echo "<strong><h3 style='color:lightred;text-align:center;'>Connection Failed</h3></strong><br/>";
}
 ?>
