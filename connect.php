$db_obj = new mysqli($host,$user,$password,$dbname);
if (mysqli_connect_errno()){ 
 printf("Can't connect to $host $dbname. Errorcode: %s\n", mysqli_connect_error());
 exit;
 }
 
 $db_obj->close()
 
