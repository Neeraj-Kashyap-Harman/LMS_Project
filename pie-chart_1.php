<?php
/**
 *
 *
 * @link          https://github.com/mzm-dev 
 * @demo          http://highcharts-mzm.rhcloud.com
 * @created       September 2014
 * @fb            https://www.facebook.com/zakimedia
 * @email         mohdzaki04@gmail.com
 */
$cakeDescription = "Highcharts Pie Chart";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="../library/css/cake.generic.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="../library/js/pie_jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container',
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Web Sales & Marketing Efforts'
                    },
                    tooltip: {
                        formatter: function() {
                            return '<b>' + this.point.name + '</b>: ' + this.y;
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                formatter: function() {
                                    return '<b>' + this.point.name + '</b>: ' + this.y;
                                }
                            },
                            showInLegend: true
                        }
                    },
                    series: []
                };

                $.getJSON("data-pie-chart.php", function(json) {
                    options.series = json;
                    chart = new Highcharts.Chart(options);
                });
            });
        </script>
        <script src="../library/js/highcharts.js"></script>
        <script src="../library/js/exporting.js"></script>
    </head>
    <body>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </body>
</html>
