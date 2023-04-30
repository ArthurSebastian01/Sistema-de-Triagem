<html>
  <head>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-radar.min.js"></script>
    <style type="text/css">
      html, body, #container {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }
      main {
        background: url("../imgFundo.jpg") no-repeat center center;
        background-size: cover;
        height: 92vh;
      }
    </style>
  </head>
  <body>
    <div id="container"></div>
  </body>
  <script>
    anychart.onDocumentReady(function () {
     var doencas = [
       {x: "Diarreia", value: 5},
       {x: "Constipacao", value: 3},
       {x: "Sensacao de que o intestino nao e completamente esvaziado", value: 4},
       {x: "Presenca de sangue nas fezes", value: 5},
       {x: "Dor abdominal tipo colica", value: 0},
       {x: "Cansaco e fadiga", value: 2},
       {x: "Perda de peso sem um motivo especifico", value: 1}
     ]; 

     // create radar chart
     var chart = anychart.radar();

     // set chart yScale settings
     chart.yScale()
       .minimum(0)
       .maximum(5)
       .ticks({'interval':1});

      // color alternating cells
      chart.yGrid().palette(["gray 0.1", "gray 0.2"]);

      // create first series
      chart.area(doencas).name('Nome do paciente').markers(true).fill("#E55934", 0.3).stroke("#E55934")

      // set chart title
      chart.title("Sistema de Triagem")
        // set legend
        .legend(true);

      // set container id for the chart
      chart.container('container');
      // initiate chart drawing
      chart.draw();

    });
  </script>
</html>