<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart()  {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['ferro', <?php echo isset($contagens["Masculino"])?$contagens["Masculino"]:0 ?>],
          ['areia', <?php echo isset($contagens["Feminino"])?$contagens["Feminino"]:0 ?>],
          ['terra', <?php echo isset($contagens["Outro"])?$contagens["Outro"]:0 ?>],
          ['torneira', <?php echo isset($contagens["o"])?$contagens["o"]:0 ?>],
          ['mangueira', <?php echo isset($contagens["i"])?$contagens["i"]:0 ?>],
          ['tijolo', <?php echo isset($contagens["u"])?$contagens["u"]:0 ?>],
          ['cimento', <?php echo isset($contagens["y"])?$contagens["y"]:0 ?>],
        ]);

      var options = {
        chart: {
        },
        height: 300,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>

