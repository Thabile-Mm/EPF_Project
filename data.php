<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPF_System</title>
</head>
<body>
    
<canvas id="myChart" width="400" height="400"></canvas>

 <script >

var XLSX = require('xlsx');
var workbook = XLSX.readFile('data.xlsx');
var first_sheet_name = workbook.SheetNames[0];
var worksheet = workbook.Sheets[first_sheet_name];
var data = XLSX.utils.sheet_to_json(worksheet);

var labels = [0,0];
var series1 = [];
var series2 = [];

data.forEach(function(row) {
  labels.push(row.label);
  series1.push(row.series1);
  series2.push(row.series2);
});

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Series 1',
            data: series1,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        },
        {
            label: 'Series 2',
            data: series2,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

 </script>
</body>
</html>