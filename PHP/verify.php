<?php
include("condatabase.php");
$queryString = $_SERVER['QUERY_STRING'];
     
$query = "SELECT * FROM member";
$result = mysqli_query($query) or die(mysqli_error());
	 
	while($row = mysqli_fetch_array($result)){
	 
	    if ($queryString == $row["activationkey"]){
	       echo "Congratulations!" . $row["username"] . " is now the proud new owner of a YOURWEBSITE.com account.";
	       $sql="UPDATE member SET activationkey = '', status='1' WHERE (id = $row[id])";
        
	       if (!mysqli_query($sql)) {
	          die('Error: ' . mysqli_error());
	       }
	        
	      
	 
	    }
	  }
?>