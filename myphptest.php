<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World!!!</p>'; ?>
 <?php
 $servername = "volidb.c8xs6da2rffz.ap-southeast-2.rds.amazonaws.com:3306";
 $username = "volidb";
 $password = "volidb123";

 // Create connection
 $conn = new mysqli($servername, $username, $password);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully";
 ?>
 </body>
</html>
