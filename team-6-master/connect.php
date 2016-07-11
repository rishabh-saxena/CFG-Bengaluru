<<<<<<< HEAD
<html>
<head>
</head>
<body>
<?php
$server = 'localhost';
$username   = 'root';
$password   = 'password';
$database   = 'rangde_cfg';
$conn=mysqli_connect($server, $username,  $password);
if(!$conn)
{
    exit('Error: could not establish database connection');
}
if(!mysqli_select_db($conn,$database))
{
    exit('Error: could not select the database');
}
?>
</body>
</html>
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
>>>>>>> origin/master
