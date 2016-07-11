<?php
	$firstname = filter_var($_POST['reg_fname'], FILTER_SANITIZE_STRING);
	$lastname = filter_var($_POST['reg_lname'], FILTER_SANITIZE_STRING);
	$username = filter_var($_POST['reg_uname'],FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['reg_email'],FILTER_SANITIZE_STRING);
	$mobile = $_POST['reg_phno'];
	$password = filter_var($_POST['reg_pass'], FILTER_SANITIZE_STRING);
	$table_name = 'user';

	/*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'admin';

    /*** mysql password ***/
    $mysql_password = 'mypassword';

    /*** database name ***/
    $mysql_dbname = 'rangde_cfg';
    try
    {
        $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);        

        /*** set the error mode to excptions ***/
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO $table_name (firstname,lastname,username,email,mobile,password) VALUES (:fname,:lname,:uname,:email,:mobile,:password)" ;

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fname', $firstname);
        $stmt->bindParam(':lname', $lastname);
        $stmt->bindParam(':uname', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "You are successfully registered!!";
    }
    catch(Exception $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
        
?>
<html>
	<head></head>
	<body>
		<p>Click <a href="/rangde/home.html">here</a> to head to home page or sign in</p>
	</body>
</html>		