<?php

error_reporting(1);

include("functions/db.php");
$name=mysql_escape_String($_POST["name"]);
$phone_no=mysql_escape_String($_POST["phone_no"]);
$email=mysql_escape_String($_POST["email"]);
$password=mysql_escape_String($_POST["password"]);
$address=mysql_escape_String($_POST["address"]);
$best_contact=mysql_escape_String($_POST["best_contact"]);
$sql=mysql_query("INSERT INTO customer (cust_name, email_id, password, phone, best_contact, address) values ('$name','$email','$password','$phone_no','$best_contact','$address') ");
	if ($sql) 
        {
        	echo '<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> <script>$(function(){alert("Successfully Registered");});</script>';
    	    echo("<script>location.href = '".request_quote.".php';</script>");         
        }
    else
        {
            echo "Registration failed" .mysql_error();
        }

?>
