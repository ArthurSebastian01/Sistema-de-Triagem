<!DOCTYPE html>
<html>
<head>
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
    <div id="background-container"></div>
    <div id="chart-container"></div>

    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-radar.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        anychart.onDocumentReady(function () {
            $.ajax({
                url: 'ConexaoBDgrafico.php', // O URL para o arquivo PHP
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Crie o gráfico de radar usando os dados recebidos
                    var chart = anychart.radar();
                    chart.yScale()
                        .minimum(0)
                        .maximum(5)
                        .ticks({'interval': 1});
                    chart.yGrid().palette(["gray 0.2", "gray 0.4"]);
                    chart.area(data).name('Nome do paciente').markers(true).fill("green", 0.5).stroke("green");
                    chart.title("GRÁFICO DE RADAR AUXILIAR").legend(true);
                    chart.container('chart-container');
                    chart.draw();
                },
                error: function (error) {
                    console.error('Erro ao buscar os dados: ', error);
                }
            });
        });
    </script>
</body>
</html>
