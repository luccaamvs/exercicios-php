<?php
	//Connect To Database
	
	$hostname="127.0.0.1";
	$username="root";
	$password="";
	$dbname="protocolo";
	$usertable="usuarios";
	$yourfield = "your_field";
	
	mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysqli_query($query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Name: ".$name."br/>";
		}
	}
?>