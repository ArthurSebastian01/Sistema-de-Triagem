<?php include "ConexaoBDgrafico.php"; ?>

<!DOCTYPE html>
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
<main>
    <div id="container"></div>
</main>
<script>
    anychart.onDocumentReady(function () {
        var valores = [
            { x: "Alteração no Intestino", value: <?php echo $nivel_alteracao_intestino; ?> },
            { x: "Sangramento nas Fezes", value: <?php echo $nivel_sangramento_fezes; ?> },
            { x: "Dor Abdominal", value: <?php echo $nivel_dor_abdomen; ?> },
            { x: "Emagrecimento Repentino", value: <?php echo $nivel_emagrecimento_repentino; ?> }
        ];

        // create radar chart
        var chart = anychart.radar();

        // set chart yScale settings
        chart.yScale()
            .minimum(0)
            .maximum(5)
            .ticks({ 'interval': 1 });

        // color alternating cells
        chart.yGrid().palette(["gray 0.1", "gray 0.2"]);

        // create first series
        chart.area(valores).name('<?php echo $nome_usuario; ?>').markers(true).fill("#E55934", 0.3).stroke("#E55934")

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
</body>
</html>
