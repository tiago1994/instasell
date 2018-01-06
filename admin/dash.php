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
    <div class="row">
		<div class="col-md-12">
			<h2><b>Últimas Vendas</b></h2>
    		<hr>
		</div>
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th style="width: 10px;">ID</th>
		                <th>Loja</th>
		                <th>Cliente</th>
		                <th>Produto</th>
		                <th style="width: 10px;">Qtd</th>
		                <th style="width: 10px;">Valor Total</th>
		            	<th style="width: 10px;">Opções</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?
		        		$sql_venda = mysqli_query($link, 'SELECT * FROM venda');
		        		while($venda = mysqli_fetch_array($sql_venda)){
		                    $sql_loja = mysqli_query($link, 'SELECT * FROM loja WHERE id = "'.$venda['id_loja'].'" LIMIT 1');
		                    $loja = mysqli_fetch_array($sql_loja);

		                    $sql_cliente = mysqli_query($link, 'SELECT * FROM cliente WHERE id = "'.$venda['id_cliente'].'" LIMIT 1');
		                    $cliente = mysqli_fetch_array($sql_cliente);

		                    $sql_produto = mysqli_query($link, 'SELECT * FROM loja_produto WHERE id = "'.$venda['id_loja_produto'].'" LIMIT 1');
		                    $produto = mysqli_fetch_array($sql_produto);
		                    
		        			echo '<tr>';
		        			echo '<td>'.$venda['id'].'</td>';
		                    echo '<td>'.$loja['nome'].'</td>';
		                    echo '<td>'.$cliente['nome'].'</td>';
		                    echo '<td>'.$produto['nome'].'</td>';
		        			echo '<td>'.$venda['quantidade'].'</td>';
		        			echo '<td><b>R$'.number_format($venda['valor_total'], 2, ',', '.').'</b></td>';
		                    echo '<td><a href="vendas.php?acao=editar&id='.$venda['id'].'" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Visualizar</a></td>';
		                    echo '</tr>';
		        		}
		        	?>
		        </tbody>
		    </table>
		</div>
    </div>
<?
    require_once('includes/rodape.php');
?>      
    