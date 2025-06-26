<?php
 $databaseServer = 'localhost';
 $databaseUserName = 'root';
 $databasePassword = 'aska1329';
 $database = 'electronics';

 $databaseConnection = mysqli_connect(
 $databaseServer,
 $databaseUserName,
 $databasePassword,
 $database
 );
 if( ! $databaseConnection ){ // if failed to connect
 die("Connection failed " . mysqli_connect_error());
 }
?>