<?php
	$dbServer = "localhost" ;
	$dbUser = "root" ;
	$dbPass = "" ;
	$dbName = "ur2doc" ;
	header('Content-Type: text/html; charset=utf-8') ;
	$conn = @mysqli_connect( $dbServer , $dbUser , $dbPass , $dbName ) ;
		//echo "success" ;

	if(mysqli_connect_errno($conn))
		die ("error") ;
  	
	mysqli_set_charset($conn , "utf8") ;
	
?>