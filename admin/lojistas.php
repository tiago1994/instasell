<?
	session_start();
	$_SESSION['pagina'] = 'lojistas';
    require_once('includes/topo.php');

    $acao   = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id     = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');

    if(isset($_POST['btn-adicionar'])){
        $nome               = $_POST['txtnome'];
        $id_loja            = $_POST['txtidloja'];
        $email              = $_POST['txtemail'];
        $senha              = $_POST['txtsenha'];
        $avatar             = $_POST['txtavatar'];
        $cpf                = $_POST['txtcpf'];
        
        $add = mysqli_query($link, 'INSERT INTO lojista (nome, id_loja, email, senha, avatar, cpf) VALUES ("'.$nome.'", "'.$id_loja.'", "'.$email.'", "'.$senha.'", "'.$avatar.'", "'.$cpf.'")');

        if($add){
            header('Location: lojistas.php?retorno=1');
            exit();
        }else{
            header('Location: lojistas.php?retorno=0');
            exit();
        }
    }
    if(isset($_POST['btn-atualizar'])){
        $nome               = $_POST['txtnome'];
        $id_loja 		    = $_POST['txtidloja'];
        $email              = $_POST['txtemail'];
        $senha              = $_POST['txtsenha'];
        $avatar             = $_POST['txtavatar'];
        $cpf                = $_POST['txtcpf'];

        $att = mysqli_query($link, 'UPDATE lojista SET nome = "'.$nome.'", id_loja = "'.$id_loja.'", email = "'.$email.'", senha = "'.$senha.'", avatar = "'.$avatar.'", cpf = "'.$cpf.'" WHERE id = "'.$id.'" LIMIT 1');

        if($att){
            header('Location: lojistas.php?retorno=1');
            exit();
        }else{
            header('Location: lojistas.php?retorno=0');
            exit();
        }
    }
    if($acao == 'editar'){
        $edd = mysqli_query($link, 'SELECT * FROM lojista WHERE id = "'.$id.'" LIMIT 1');
        
        if(mysqli_num_rows($edd) > 0){
            $editar = mysqli_fetch_array($edd);
        }else{
            header('Location: lojistas.php?retorno=0');
            exit();   
        }
    }
    if($acao == 'deletar'){
        $del = mysqli_query($link, 'DELETE FROM lojista WHERE id = "'.$id.'" LIMIT 1');

        if($del){
            header('Location: lojistas.php?retorno=1');
            exit();  
        }else{
            header('Location: lojistas.php?retorno=0');
            exit();   
        }
    }
?>
<?
if($acao == ''){
?>
    <h2><b>Lojistas</b> <a href="lojistas.php?acao=novo" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Adicionar</a></h2><hr>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="width: 10px;">ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th style="width: 10px;">CPF</th>
            	<th style="width: 100px;">Opções</th>
            </tr>
        </thead>
        <tbody>
        	<?
        		$sql_lojistas = mysqli_query($link, 'SELECT * FROM lojista');
        		while($lojistas = mysqli_fetch_array($sql_lojistas)){
        			echo '<tr>';
        			echo '<td>'.$lojistas['id'].'</td>';
        			echo '<td>'.$lojistas['nome'].'</td>';
                    echo '<td>'.$lojistas['email'].'</td>';
                    echo '<td>'.$lojistas['cpf'].'</td>';
        			echo '<td><a href="lojistas.php?acao=editar&id='.$lojistas['id'].'" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar</a> <a href="lojistas.php?acao=deletar&id='.$lojistas['id'].'" class="btn btn-danger btn-xs btnremover"><i class="fa fa-trash"></i> Excluir</a></td>';
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
    <h2><b><?=(($acao == 'novo')?'Novo Lojista':'Editar '.$editar['nome'])?></b></h2><hr>

    <form method="POST" action="">
        <div class="row">
            <div class="col-md-4">
                <label>Loja</label>
                <select class="form-control" name="txtidloja">
                    <?
                        $sql_lojas = mysqli_query($link, 'SELECT * FROM loja');
                        while($lojas = mysqli_fetch_array($sql_lojas)){
                            echo '
                                <option '.(($acao == 'editar')?(($editar['id_loja'] == $lojas['id'])?'selected = "selected"':''):'').'>
                                    '.$lojas['nome'].'
                                </option>
                            ';
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtnome" placeholder="Digite o nome da lojistas." value="<?=(($acao == 'editar')?$editar['nome']:'')?>" required>
            </div>
         	<div class="col-md-4">
                <label>Email</label>
                <input type="text" name="txtemail" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['email']:'')?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Senha</label>
                <input type="text" name="txtsenha" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['senha']:'')?>">
            </div>
            <div class="col-md-4">
                <label>Avatar</label>
                <input type="text" class="form-control" name="txtavatar" placeholder="Digite o nome da lojistas." value="<?=(($acao == 'editar')?$editar['avatar']:'')?>" required>
            </div>
         	<div class="col-md-4">
                <label>CPF</label>
                <input type="text" name="txtcpf" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['cpf']:'')?>" required>
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
    