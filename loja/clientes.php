<?
	session_start();
	$_SESSION['pagina'] = 'clientes';
    require_once('includes/topo.php');

    $id     = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');

    if($id != ''){
        $sql_verifica = mysqli_query($link, 'SELECT * FROM venda WHERE id_cliente = "'.$id.'" AND id_loja = "'.$_SESSION['lojistaid'].'"');
        if(mysqli_num_rows($sql_verifica) > 0){
            $edd = mysqli_query($link, 'SELECT * FROM cliente WHERE id = "'.$id.'" LIMIT 1');
            $cliente = mysqli_fetch_array($edd);
        }else{
            header('Location: logout.php');
            exit();
        }
    }
?>
<?
if($id == ''){
?>
    <h2><b>Clientes</b></h2><hr>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="width: 10px;">ID</th>
                <th>Nome</th>
                <th>Email</th>
            	<th style="width: 10px;">Opções</th>
            </tr>
        </thead>
        <tbody>
        	<?
        		$sql_cliente = mysqli_query($link, 'SELECT * FROM cliente');
        		while($cliente = mysqli_fetch_array($sql_cliente)){
        			echo '<tr>';
                    echo '<td>'.$cliente['id'].'</td>';
        			echo '<td>'.$cliente['nome'].'</td>';
                    echo '<td>'.$cliente['email'].'</td>';
        			echo '<td><a href="clientes.php?id='.$cliente['id'].'" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Visualizar</a></td>';
                    echo '</tr>';
        		}
        	?>
        </tbody>
    </table>
<?
}
if($id != ''){
?>
    <h2><b><?=$cliente['nome']?></b><a href="clientes.php" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Voltar</a></h2><hr>

    <div class="row">
        <div class="col-md-4">
            <label>Nome</label><br>
            <?=$cliente['nome']?>
        </div>
        <div class="col-md-4">
            <label>E-mail</label><br>
            <?=$cliente['email']?>
        </div>
    </div>
<?
}
?>
<?
    require_once('includes/rodape.php');
?>      
    