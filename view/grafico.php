<?php
    include_once("../control/ConexaoBDgrafico.php"); 
    include_once("./components/navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-radar.min.js"></script>
    <link rel="stylesheet" href="../css/grafico.css">
    <link rel="stylesheet" href="../css/style_global.css">
</head>
<body>
<div class="content">
    <div id="container"></div>
</div>
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
        chart.title("Gráfico de sintomas")
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
