
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>highcharts</title>
	<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <div id="container" style="width:100%; height:400px;"></div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
    var myChart = Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Temperature statistic'
        },
        xAxis: {
            categories: ['2019-03-16','2019-03-17','2019-03-18','2019-03-19','2019-03-20','2019-03-21','2019-03-22','2019-03-23']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            }
        },
        series: [{
            name: 'MAX(suhu)',
            data: [34,36,35,35,32,31,34,35]
        },{
            name: 'MIN(suhu)',
            data: [30,31,30,30,31,29,32,30]
        },{
            name: 'AVG(suhu)',
            data: [32,33,32,32,31,30,32,31]
        }]
    });
});
</script>
<div id="container" style="width:100%; height:400px;margin-top: 500px;"></div>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function () {
    var myChart = Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Temperature statistic'
        },
        xAxis: {
            categories: ['2019-03-16','2019-03-17','2019-03-18','2019-03-19','2019-03-20','2019-03-21','2019-03-22','2019-03-23']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            }
        },
        series: [{
            name: 'MAX(suhu)',
            data: [34,36,35,35,32,31,34,35]
        },{
            name: 'MIN(suhu)',
            data: [30,31,30,30,31,29,32,30]
        },{
            name: 'AVG(suhu)',
            data: [32,33,32,32,31,30,32,31]
        }]
    });
});
</script>

</body>
</html>