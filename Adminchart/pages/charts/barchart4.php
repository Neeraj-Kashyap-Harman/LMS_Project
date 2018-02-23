<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Chart.js demo</title>
        <!-- import plugin script -->
       <script src="../../plugins/chartjs/Chart.min.js"></script> 
 <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    </head>
    <body>
        <!-- line chart canvas element -->
        
        <canvas id="income" width="600" height="400"></canvas>
        <script>
            // bar chart data
            $.get("chart2.php", function (barData1, status) {
   var barData = JSON.parse(barData1);
   
  console.log(barData);
           var barData = {
                labels : barData.month,
                datasets : [
                    {
                        fillColor : "#48A497",
                        strokeColor : "#48A4D1",
                        data : barData.count
                    }
                ]
            }
            // get bar chart canvas
            var income = document.getElementById("income").getContext("2d");
            // draw bar chart
            new Chart(income).Bar(barData);
});
        </script>
    </body>
</html>


