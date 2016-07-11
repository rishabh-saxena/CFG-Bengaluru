<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['user_id'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['fid'], $_POST['fpwd']))
{
    echo 'Please enter a valid username and password';
}
/*** check the username is of correct length ***/
elseif (strlen( $_POST['fid']) > 20 || strlen($_POST['fid']) < 3)
{
    echo 'Incorrect Length for Username';
}
/*** check the password is of correct length ***/
elseif (strlen( $_POST['fpwd']) > 20 || strlen($_POST['fpwd']) < 4)
{
   echo 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['fid']) != true)
{
    /*** if there is no match ***/
    echo "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['fpwd']) != true)
{
        /*** if there is no match ***/
        echo "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $fid = filter_var($_POST['fid'], FILTER_SANITIZE_STRING);
    $fpwd = filter_var($_POST['fpwd'], FILTER_SANITIZE_STRING);

    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

    /*** mysql password ***/
    $mysql_password = 'password';

    /*** database name ***/
    $mysql_dbname = 'rangde_cfg';

    try
    {
        $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);        

        /*** set the error mode to excptions ***/
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = $conn->prepare("SELECT username FROM user 
                               WHERE username = :fid AND password = :fpwd");

        /*** bind the parameters ***/
        $stmt->bindParam(':fid', $fid, PDO::PARAM_STR);
        $stmt->bindParam(':fpwd', $fpwd, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***///it is same as fetchColumn(0);
        $user_id = $stmt->fetchColumn();//as no arg is supplied it will return the 1st col from next row

        /*** if we have no result then login failed ***/
        if($user_id == false)
        {
                echo 'Login Failed';
        }
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['user_id'] = $user_id;

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
                include 'landing.php';
		}

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo $sql . "<br>" . $e->getMessage();
        echo 'We are unable to process your request. Please try again later"';
    }
}
?>



