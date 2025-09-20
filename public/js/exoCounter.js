google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Модель', 'Кол-во'],
            ['Model D', 3],
            ['Model M', 8],
            ['Model ST',1],
        ]);
        var options = {
            is3D: true,
            backgroundColor: '#191919',
            chartArea: {backgroundColor: '#191919'},
            legend: {
              textStyle: {
                  color: 'white'
              }
            }
        };
        var chart = new google.visualization.PieChart(document.getElementById('exo-count'));
        chart.draw(data, options);
    }