<html>
    <body>
        <?php
            include("Graficas.php");
            $grf = new Grafica();
            $matriz = $grf->getAll();
            $tiempo;
            $valor;
            for($i= 0; $i < count($matriz); $i++){
                $valor[$i]=$matriz[$i][1];
                $time=$matriz[$i][2];
                $fecha = new datetime($time);
                $tiempo[$i] = $fecha->getTimestamp()*1000;
            }
        ?>
        <div id="contenedor"></div>

        <script src="https://code.jquery.com/jquery.js"></script>
            <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
        <script src="http://code.highcharts.com/stock/highstock.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script>

            chartCPU = new Highcharts.StockChart({
                chart: {
                    renderTo: 'contenedor'
                    //defaultSeriesType: 'spline'

                },
                rangeSelector : {
                    enabled: false
                },
                title: {
                    text: 'Gráfica'
                },
                xAxis: {
                    type: 'datetime'
                    //tickPixelInterval: 150,
                    //maxZoom: 20 * 1000
                },
                yAxis: {
                    minPadding: 0.2,
                    maxPadding: 0.2,
                    title: {
                        text: 'Valores',
                        margin: 10
                    }
                },
                series: [{
                    name: 'valor',
                    data: (function() {
                            // generate an array of random data
                            var data = [];
                            <?php
                                for($i = 0 ;$i<count($matriz);$i++){
                            ?>
                            data.push([<?php echo $tiempo[$i];?>,<?php echo $valor[$i];?>]);
                            <?php } ?>
                            return data;
                        })()
                }],
                credits: {
                        enabled: false
                }
            });

        </script>   
    </body>
</html>