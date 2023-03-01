<div id="graficaLineal"></div>

<?php
	require 'dbConnection.php'; 

	$sql = "SELECT fecha,temp,hora as count 
			from registros WHERE hora between '09:00:00' and '10:59:59'
			GROUP BY DAY(fecha) ORDER BY fecha "; 

	$result = mysqli_query($conn,$sql);

	$valoresY = array();//montos
	$valoresX = array();//fechas
	
	while ($ver = mysqli_fetch_row($result)) {
		$valoresY[] = $ver[1];
		$valoresX[] = $ver[0];
		
	}

	$datosX = json_encode($valoresX);
	$datosY = json_encode($valoresY);
?>


<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX = crearCadenaLineal('<?php echo $datosX ?>');
	datosY = crearCadenaLineal('<?php echo $datosY ?>');
 
	var trace1 = {
		x: datosX,
		y: datosY,
	    mode: 'lines+markers',
	    name: 'Mañana',
		line: {
			color: 'ff0000',
			width: 2
		}
	};
    

    var layout = {
        title: 'Temperatura - Mañana',
        xaxis: {
            title: 'FECHAS',
            zeroline: true,
            showgrid: true,
            showline: true
        },
        yaxis: {
            title: 'TEMPERATURA [ °C ]'
        }
    }

    var data = [trace1];

	Plotly.newPlot('graficaLineal', data,layout);
</script>