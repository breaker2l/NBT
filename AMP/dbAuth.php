<!--User Authentication Using Database-->
<?php
//Adding a new User
function add_member(){
	global $db_obj;
	$uid=$db_obj->escape_string($_REQUEST['uid']);  //method $db_obj->escape_string makes a string safe to use in a query.
    $last=$db_obj->escape_string($_REQUEST['last']);
    $first=$db_obj->escape_string($_REQUEST['first']);
    $email=$db_obj->escape_string($_REQUEST['email']);
    $pass=$db_obj->escape_string($_REQUEST['pass']);
	$query="INSERT INTO member VALUES ('$uid','$last','$first','email',PASSWORD('pass'))" //PASSWORD is a one way encryption function that turns any string into a 41 byte binary string on modern MySQL systems.
    return (db_obj->query($query));
}

//Authenticating a User
function authenticate($uid,$pass){
	global $db_obj;
	$userid=$db_obj->escape_string($uid);
	$pass=$db_obj->escape_string($pass);
	$query="SELECT * FROM member WHERE uid='$uid'"
	   . " AND passwd = PASSWORD('$pass')";
	 
	 if ( ($result = $db_obj->query($query))
		   && $result->num_rows == 1)
		   { return $uid; }
		   else
		   { return ""; }
}

//Changing Passwords

function change_pw($uid,$oldpw,$newpw){
	global $db_obj;
	$uid=$db_obj->escape_string($uid);
	$oldpw=$db_obj->escape_string($oldpw);
	$newpw=$db_obj->escape_string($newpw);
	if ( authenticate($uid,$oldpw))
	{ $query="UPDATE member " . 
             "SET passwd=PASSWORD('$newpw') " .
			 "WHERE uid='";
	  return (db_obj->query($query));
	  }
	 return FALSE;
}

if ( change_pw ($uid,$oldpw,$newpw) ){
echo "<p>Password change for $uid has been done</p>;}
else{
echo "<p>Password chnage failed.</p>";}

?>