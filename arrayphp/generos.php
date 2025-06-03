<?php
    $gen = $_SESSION['generos'];
    $contagens = array_count_values($gen);
?>
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['ferro', <?php echo isset($contagens["Masculino"])?$contagens["Masculino"]:0 ?>],
          ['areia', <?php echo isset($contagens["Feminino"])?$contagens["Feminino"]:0 ?>],
          ['terra', <?php echo isset($contagens["Outro"])?$contagens["Outro"]:0 ?>],
          ['torneira', <?php echo isset($contagens["o"])?$contagens["o"]:2 ?>],
          ['mangueira', <?php echo isset($contagens["i"])?$contagens["i"]:0 ?>],
          ['tijolo', <?php echo isset($contagens["u"])?$contagens["u"]:0 ?>],
          ['cimento', <?php echo isset($contagens["y"])?$contagens["y"]:0 ?>],
        ]);
       

        // Set chart options
        var options = {
                       'height':250,};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>