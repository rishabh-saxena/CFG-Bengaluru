<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="cssland/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="cssland/simple-sidebar.css" rel="stylesheet">
    <link href="cssland/progress.css" rel="stylesheet">
    <link href="cssland/button.css" rel="stylesheet">
    <link href="leadercss/leader.css" rel="stylesheet">
</head>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="D:/login templates/landing page/landing page/landing.html">
                        <?php try 
                               {
                                    /*** connect to database ***/
                                    /*** mysql hostname ***/
                                    $mysql_hostname = 'localhost';
                                     /*** mysql username ***/
                                    $mysql_username = 'admin';
                                    /*** mysql password ***/
                                    $mysql_password = 'mypassword';
                                    /*** database name ***/
                                    $mysql_dbname = 'rangde_cfg';

                                    $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        
                                    /*** set the error mode to excptions ***/
                                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    /*** prepare the select ***/
                                    $stmt = $dbh->prepare("SELECT username FROM user WHERE username = :fid");
                                    /*** bind the parameters ***/
                                    $stmt->bindParam(':fid', $_SESSION['user_id'], PDO::PARAM_INT);//here user id is fid i.e. login id
                                    /*** execute the prepared statement ***/
                                    $stmt->execute();
                                     /*** check for a result ***/
                                    $fname = $stmt->fetchColumn();
        
                                    if($fname == false)
                                    {
                                        $message = 'Access Error';
                                    }
                                    else
                                    {
                                        $message = 'Welcome '.$fname;
                                    }
                                }
                                catch (Exception $e)
                                {
                                    /*** if we are here, something is wrong in the database ***/
                                    $message = 'We are unable to process your request. Please try again later"';
                                } 
                                echo $message;
                                ?>

                    </a>
                </li>
                <li>
                    <a class="active" >Leaderboard</a>
                </li>
                <li>
                   <a href="/rangde/report/chart.html">report</a>
                </li>
                <li>
                    <a href="/rangde/index1.html">stories</a>
                </li>
                <li>
                    <a href="/rangde/dis.php">chat</a>
                </li>
                <li>
                    <a href="https://www.rangde.org/about-us">About</a>
                </li>
                <li>
                    <a href="">Social Interaction</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Leaderboard</h2>
                     <table>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Points</th>
                            <th>profile</th>
                        </tr>
                        <?php
                            /*** connect to database ***/
                            /*** mysql hostname ***/
                            $mysql_hostname = 'localhost';

                            /*** mysql username ***/
                            $mysql_username = 'admin';

                            /*** mysql password ***/
                            $mysql_password = 'mypassword';

                            /*** database name ***/
                            $mysql_dbname = 'rangde_cfg';

                            $fid = filter_var($_POST['fid'], FILTER_SANITIZE_STRING);

                            try
                            {
                                $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);        

                                /*** set the error mode to excptions ***/
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                /*** prepare the select statement ***/
                                $stmt = $conn->prepare("SELECT rank,username,points,profile FROM user ORDER BY points DESC");

                                /*** bind the parameters ***/
                                $stmt->bindParam(':fid', $fid, PDO::PARAM_STR);

                                /*** execute the prepared statement ***/
                                $stmt->execute();

                                $rank = 1;

                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                if (mysql_num_rows($result)) {
                                    while ($row = mysql_fetch_assoc($result)) {
                                        echo "<td>{$rank}</td>
                                        <td>{$row['username']}</td>
                                        <td>{$row['points']}</td>
                                        <td>{$row['profile']}</td>";

                                        $rank++;
                                    }
                                }
                            }
<<<<<<< HEAD
                            catch(Exception $e)
                            {
                                $e.getMessage();
                            }   
=======
                            catch(excptions $e)
                            {}
>>>>>>> origin/master
                        ?>
                     <!--<tr>
                     <td>Peter</td>
                     <td>Griffin</td>
                     <td>$100</td>
                     <td>
                     <a href="http://example.com">hello world</a>
                     </td>
                     </tr>
                     <tr>
                     <td>Lois</td>
                     <td>Griffin</td>
                     <td>$150</td>
                     <td><a href="www.facebook.com" </a><td>
                     </tr>
                     <tr>
                     <td>Joe</td>
                     <td>Swanson</td>
                     <td>$300</td>
                     <td><a href="www.facebook.com" </a><td>
                     </tr>
                     <tr>
                     <td>Cleveland</td>
                     <td>Brown</td>
                     <td>$250</td>
                     <td><a href="www.facebook.com" </a><td>
                     </tr>-->
                     </table>
</div>
</div>
</div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

