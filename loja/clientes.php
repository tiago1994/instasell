<?
	session_start();
	$_SESSION['pagina'] = 'clientes';
    require_once('includes/topo.php');

    $acao   = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id     = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');

    if($acao == 'editar'){
        $edd = mysqli_query($link, 'SELECT * FROM loja WHERE id = "'.$id.'" LIMIT 1');
        
        if(mysqli_num_rows($edd) > 0){
            $editar = mysqli_fetch_array($edd);
        }else{
            header('Location: lojas.php?retorno=0');
            exit();   
        }
    }
?>
<?
if($acao == ''){
?>
    <h2><b>Clientes</b></h2><hr>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            	<th style="width: 100px;">Opções</th>
            </tr>
        </thead>
        <tbody>
        	<?
        		$sql_cliente = mysqli_query($link, 'SELECT * FROM cliente');
        		while($cliente = mysqli_fetch_array($sql_cliente)){
        			echo '<tr>';
        			echo '<td>'.$cliente['nome'].'</td>';
                    echo '<td>'.$cliente['email'].'</td>';
        			echo '<td><a href="clientes.php?acao=editar&id='.$cliente['id'].'" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></td>';
                    echo '</tr>';
        		}
        	?>
        </tbody>
    </table>
<?
}
if($acao == 'editar' or $acao == 'novo'){
?>
    <h2><b><?=(($acao == 'novo')?'Nova Loja':'Editar '.$editar['nome'])?></b></h2><hr>

    <form method="POST" action="">
        <div class="row">
            <div class="col-md-4">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtnome" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['nome']:'')?>" required>
            </div>
         	<div class="col-md-4">
                <label>CNPJ</label>
                <input type="text" name="txtcnpj" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['cnpj']:'')?>">
            </div>
            <div class="col-md-4">
                <label>CPF</label>
                <input type="text" name="txtcpf" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['cpf']:'')?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Estado</label>
                <input type="text" class="form-control" name="txtestado" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['estado']:'')?>" required>
            </div>
         	<div class="col-md-4">
                <label>Cidade</label>
                <input type="text" name="txtcidade" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['cidade']:'')?>" required>
            </div>
            <div class="col-md-4">
                <label>Endereço</label>
                <input type="text" name="txtendereco" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['endereco']:'')?>" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Número</label>
                <input type="text" class="form-control" name="txtnumero" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['numero']:'')?>" required>
            </div>
         	<div class="col-md-4">
                <label>Complemento</label>
                <input type="text" name="txtcomplemento" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['complemento']:'')?>">
            </div>
            <div class="col-md-4">
                <label>Logo</label>
                <input type="text" name="txtlogo" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['logo']:'')?>" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Ativo</label>   
                <select class="form-control" name="txtativo">
                    <option value="1" <?=(($acao == 'editar')?(($editar['ativo'] == 1)?'selected = "selected"':''):'')?>>Sim</option>
                    <option value="0" <?=(($acao == 'editar')?(($editar['ativo'] == 0)?'selected = "selected"':''):'')?>>Não</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-success pull-right" name="<?=(($acao == 'novo')?'btn-adicionar':'btn-atualizar')?>" value="<?=(($acao == 'novo')?'Adicionar':'Salvar')?>">
            </div>
        </div>
        <!-- /.row -->
    </form>
<?
}
?>
<?
    require_once('includes/rodape.php');
?>      
    