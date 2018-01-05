<?
	session_start();
	$_SESSION['pagina'] = 'dash';
    require_once('includes/topo.php');

    $acao   = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id     = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');
?>
    <h2><b>Dashboard</b></h2>
    <hr>
    <div class="row">
		<div class="col-md-6">
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		    <script type="text/javascript">
		      google.charts.load('current', {'packages':['corechart']});
		      google.charts.setOnLoadCallback(drawChart);

		      function drawChart() {

		        var data = google.visualization.arrayToDataTable([
		          ['Task', 'Hours per Day'],
		          ['Work',     11],
		          ['Eat',      2],
		          ['Commute',  2],
		          ['Watch TV', 2],
		          ['Sleep',    7]
		        ]);

		        var options = {
		          title: 'My Daily Activities'
		        };

		        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

		        chart.draw(data, options);
		      }
		    </script>
		    <div id="piechart" style="width: 100%;"></div>
		</div>
		<div class="col-md-6">
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		    <script type="text/javascript">
		      google.charts.load('current', {'packages':['corechart']});
		      google.charts.setOnLoadCallback(drawChart);

		      function drawChart() {
		        var data = google.visualization.arrayToDataTable([
		          ['Year', 'Sales', 'Expenses'],
		          ['2004',  1000,      400],
		          ['2005',  1170,      460],
		          ['2006',  660,       1120],
		          ['2007',  1030,      540]
		        ]);

		        var options = {
		          title: 'Company Performance',
		          curveType: 'function',
		          legend: { position: 'bottom' }
		        };

		        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		        chart.draw(data, options);
		      }
		    </script>
    		<div id="curve_chart" style="width: 100%"></div>
		</div>
    </div>
<?
    require_once('includes/rodape.php');
?>      
    