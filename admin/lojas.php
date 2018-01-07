<?
	session_start();
	$_SESSION['pagina'] = 'lojas';
    require_once('includes/topo.php');

    $acao   = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id     = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');

    if(isset($_POST['btn-adicionar'])){
        $nome 				= $_POST['txtnome'];
        $descricao 			= $_POST['txtdescricao'];
        $cnpj 				= $_POST['txtcnpj'];
        $cpf 				= $_POST['txtcpf'];
        $estado 			= $_POST['txtestado'];
        $cidade 			= $_POST['txtcidade'];
        $endereco 			= $_POST['txtendereco'];
        $numero 			= $_POST['txtnumero'];
        $complemento 		= $_POST['txtcomplemento'];
        $logo 				= $_POST['txtlogo'];
        $ativo 				= $_POST['txtativo'];
        
        $add = mysqli_query($link, 'INSERT INTO loja (nome, descricao, cnpj, cpf, estado, cidade, endereco, numero, complemento, logo, ativo) VALUES ("'.$nome.'", "'.$descricao.'", "'.$cnpj.'", "'.$cpf.'", "'.$estado.'", "'.$cidade.'", "'.$endereco.'", "'.$numero.'", "'.$complemento.'", "'.$logo.'", "'.$ativo.'")');

        if($add){
            header('Location: lojas.php?retorno=1');
            exit();
        }else{
            header('Location: lojas.php?retorno=0');
            exit();
        }
    }
    if(isset($_POST['btn-atualizar'])){
        $nome 				= $_POST['txtnome'];
        $descricao 			= $_POST['txtdescricao'];
        $cnpj 				= $_POST['txtcnpj'];
        $cpf 				= $_POST['txtcpf'];
        $estado 			= $_POST['txtestado'];
        $cidade 			= $_POST['txtcidade'];
        $endereco 			= $_POST['txtendereco'];
        $numero 			= $_POST['txtnumero'];
        $complemento 		= $_POST['txtcomplemento'];
        $logo 				= $_POST['txtlogo'];
        $ativo 				= $_POST['txtativo'];

        $att = mysqli_query($link, 'UPDATE loja SET nome = "'.$nome.'", descricao = "'.$descricao.'", cnpj = "'.$cnpj.'", cpf = "'.$cpf.'", estado = "'.$estado.'", estado = "'.$estado.'", cidade = "'.$cidade.'", endereco = "'.$endereco.'", numero = "'.$numero.'", complemento = "'.$complemento.'", logo = "'.$logo.'", ativo = "'.$ativo.'" WHERE id = "'.$id.'" LIMIT 1');

        if($att){
            header('Location: lojas.php?retorno=1');
            exit();
        }else{
            header('Location: lojas.php?retorno=0');
            exit();
        }
    }
    if($acao == 'editar'){
        $edd = mysqli_query($link, 'SELECT * FROM loja WHERE id = "'.$id.'" LIMIT 1');
        
        if(mysqli_num_rows($edd) > 0){
            $editar = mysqli_fetch_array($edd);
        }else{
            header('Location: lojas.php?retorno=0');
            exit();   
        }
    }
    if($acao == 'deletar'){
        $del = mysqli_query($link, 'DELETE FROM loja WHERE id = "'.$id.'" LIMIT 1');

        if($del){
            header('Location: lojas.php?retorno=1');
            exit();  
        }else{
            header('Location: lojas.php?retorno=0');
            exit();   
        }
    }
?>
<?
if($acao == ''){
?>
    <h2><b>Lojas</b> <a href="lojas.php?acao=novo" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Adicionar</a></h2><hr>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="width: 10px;">ID</th>
                <th>Nome</th>
                <th style="width: 10px;">CNPJ</th>
                <th style="width: 10px;">CPF</th>
            	<th style="width: 10px;">Opções</th>
            </tr>
        </thead>
        <tbody>
        	<?
        		$sql_loja = mysqli_query($link, 'SELECT * FROM loja');
        		while($loja = mysqli_fetch_array($sql_loja)){
        			echo '<tr>';
        			echo '<td>'.$loja['id'].'</td>';
        			echo '<td>'.$loja['nome'].'</td>';
                    echo '<td>'.$loja['cnpj'].'</td>';
                    echo '<td>'.$loja['cpf'].'</td>';
        			echo '<td><a href="lojas.php?acao=editar&id='.$loja['id'].'" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</a> <a href="lojas.php?acao=deletar&id='.$loja['id'].'" class="btn btn-danger btn-xs btnremover"><i class="fa fa-trash"></i> Excluir</a> <a href="lojas_produtos.php?id_loja='.$loja['id'].'" class="btn btn-success btn-xs" title="Adicionar Produtos"><i class="fa fa-plus"></i> Produtos</a></td>';
                    echo '</tr>';
        		}
        	?>
        </tbody>
    </table>
    <!-- modal delete -->
    <div class="modal fade confirmaexclusao" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-center" style="padding:15px;">
                <h2 class="text-danger">Deseja realmente remover?</h2>
                <a href="javascript: void();" class="btn btn-default btn-lg" data-dismiss="modal">Cancelar</a>
                <a href="#" class="btn btn-danger btn-lg" id="btnconexclusao">Confirmar</a>
            </div>
        </div>
    </div>
<?
}
if($acao == 'editar' or $acao == 'novo'){
?>
    <h2><b><?=(($acao == 'novo')?'Nova Loja':'Editar '.$editar['nome'])?></b></h2><hr>

    <form method="POST" action="">
        <div class="row">
            <div class="col-md-6">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtnome" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['nome']:'')?>" required>
            </div>
         	<div class="col-md-3">
                <label>CNPJ</label>
                <input type="text" name="txtcnpj" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['cnpj']:'')?>">
            </div>
            <div class="col-md-3">
                <label>CPF</label>
                <input type="text" name="txtcpf" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['cpf']:'')?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label>Estado</label>
                <input type="text" class="form-control" name="txtestado" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['estado']:'')?>" required>
            </div>
         	<div class="col-md-3">
                <label>Cidade</label>
                <input type="text" name="txtcidade" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['cidade']:'')?>" required>
            </div>
            <div class="col-md-6">
                <label>Endereço</label>
                <input type="text" name="txtendereco" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['endereco']:'')?>" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label>Número</label>
                <input type="text" class="form-control" name="txtnumero" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['numero']:'')?>" required>
            </div>
         	<div class="col-md-3">
                <label>Complemento</label>
                <input type="text" name="txtcomplemento" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['complemento']:'')?>">
            </div>
            <div class="col-md-6">
                <label>Logo</label>
                <input type="file" name="txtlogo" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
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
    