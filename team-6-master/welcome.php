<?php
    include "connect.php";
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable(
          ['Type', 'Number']),
        <?php
            $query="SELECT * from Investments";
            $qresult=$mysqli->query($query);
            $results=array();
            while($res=$qresult->fetch_assoc())
            {
              $results[]=$res;
            }
            $pie_chart_data=array();
            foreach($results as $result)
            {
              $pie_chart_data[]=array($result['Type'],(int)$result['Number']);
            }
            $pie_chart_data=json_encode($pie_chart_data);
            mysqli_free_result($qresult);
        ]);

        var options = {
          title: 'Investments'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <body><h1>Welcome <?php echo $uname;?></h1>
        <?php
//$x=$result->fetch_array(MYSQLI_NUM);
        //echo $x[2];
//$result = $conn->query($sql);
  //          for($i=0;$i<$result->num_rows;$i++){
                $row = $result->fetch_assoc();?>
  //      <?php echo $row['uname']; echo " ".$row['pass'];?><br>
    //    <?php
            }
      //  ?>
        <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
