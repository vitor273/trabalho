<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable()  {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'PRODUTOS');
        data.addColumn('number', 'DATAS');
        data.addRows([
          ['ferro', <?php echo isset($contagens["Masculino"])?$contagens["Masculino"]:0 ?>],
          ['areia', <?php echo isset($contagens["Feminino"])?$contagens["Feminino"]:0 ?>],
          ['terra', <?php echo isset($contagens["Outro"])?$contagens["Outro"]:0 ?>],
          ['torneira', <?php echo isset($contagens["o"])?$contagens["o"]:0 ?>],
          ['mangueira', <?php echo isset($contagens["i"])?$contagens["i"]:0 ?>],
          ['tijolo', <?php echo isset($contagens["u"])?$contagens["u"]:0 ?>],
          ['cimento', <?php echo isset($contagens["y"])?$contagens["y"]:0 ?>],
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
  </head>
  <body>
    <div id="table_div"></div>
  </body>
</html>
