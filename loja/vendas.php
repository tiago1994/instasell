<?
	session_start();
	$_SESSION['pagina'] = 'vendas';
    require_once('includes/topo.php');

    $acao           = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id             = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');

    $sql_loja       = mysqli_query($link, 'SELECT * FROM loja WHERE id = "'.$_SESSION['lojistaidloja'].'" LIMIT 1');
    $loja           = mysqli_fetch_array($sql_loja);

    if(isset($_POST['btn-adicionar'])){
        $id_loja 		    = $_POST['txtidloja'];
        $nome               = $_POST['txtnome'];
        $descricao          = $_POST['txtdescricao'];
        $valor              = $_POST['txtvalor'];
        $quantidade         = $_POST['txtquantidade'];
        $ativo              = $_POST['txtativo'];
        $foto_principal     = $_POST['txtfotoprincipal'];
        
        $add = mysqli_query($link, 'INSERT INTO loja_produto (id_loja, nome, descricao, valor, quantidade, ativo, foto_principal) VALUES ("'.$id_loja.'", "'.$nome.'", "'.$descricao.'", "'.$valor.'", "'.$quantidade.'", "'.$ativo.'", "'.$foto_principal.'")');

        if($add){
            header('Location: produtos.php?retorno=1');
            exit();
        }else{
            header('Location: produtos.php?retorno=0');
            exit();
        }
    }
    if(isset($_POST['btn-atualizar'])){
        $id_loja            = $_POST['txtidloja'];
        $nome               = $_POST['txtnome'];
        $descricao          = $_POST['txtdescricao'];
        $valor              = $_POST['txtvalor'];
        $quantidade         = $_POST['txtquantidade'];
        $ativo              = $_POST['txtativo'];
        $foto_principal     = $_POST['txtfotoprincipal'];

        $att = mysqli_query($link, 'UPDATE loja_produto SET nome = "'.$nome.'", descricao = "'.$descricao.'", valor = "'.$valor.'", quantidade = "'.$quantidade.'", ativo = "'.$ativo.'", foto_principal = "'.$foto_principal.'" WHERE id = "'.$id.'" LIMIT 1');

        if($att){
            header('Location: produtos.php?&retorno=1');
            exit();
        }else{
            header('Location: produtos.php?retorno=0');
            exit();
        }
    }
    if($acao == 'editar'){
        $edd = mysqli_query($link, 'SELECT * FROM loja_produto WHERE id = "'.$id.'" LIMIT 1');
        
        if(mysqli_num_rows($edd) > 0){
            $editar = mysqli_fetch_array($edd);
        }else{
            header('Location: produtos.php?retorno=0');
            exit();   
        }
    }
    if($acao == 'deletar'){
        $del = mysqli_query($link, 'DELETE FROM loja_produto WHERE id = "'.$id.'" LIMIT 1');

        if($del){
            header('Location: produtos.php?retorno=1');
            exit();  
        }else{
            header('Location: produtos.php?retorno=0');
            exit();   
        }
    }
?>
<?
if($acao == ''){
?>
    <h2><b>Vendas</b></h2><hr>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="width: 10px;">ID</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th style="width: 10px;">Valor</th>
            	<th style="width: 10px;">Opções</th>
            </tr>
        </thead>
        <tbody>
        	<?
        		$sql_venda = mysqli_query($link, 'SELECT * FROM venda WHERE id_loja = "'.$_SESSION['lojistaidloja'].'"');
        		while($venda = mysqli_fetch_array($sql_venda)){
                    $sql_cliente = mysqli_query($link, 'SELECT * FROM cliente WHERE id = "'.$venda['id_cliente'].'" LIMIT 1');
                    $cliente = mysqli_fetch_array($sql_cliente);

                    $sql_produto = mysqli_query($link, 'SELECT * FROM loja_produto WHERE id = "'.$venda['id_loja_produto'].'" LIMIT 1');
                    $produto = mysqli_fetch_array($sql_produto);
                    
        			echo '<tr>';
        			echo '<td>'.$venda['id'].'</td>';
                    echo '<td>'.$cliente['nome'].'</td>';
                    echo '<td>'.$produto['nome'].'</td>';
        			echo '<td><b>R$'.number_format($venda['valor_total'], 2, ',', '.').'</b></td>';
                    echo '<td><a href="vendas.php?acao=editar&id='.$venda['id'].'" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Visualizar</a></td>';
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
    <h2><b><?=(($acao == 'novo')?'Novo Produto':'Editar '.$editar['nome'])?></b></h2><hr>

    <form method="POST" action="">
        <div class="row">
            <div class="col-md-6">
                <label>Nome</label>
                <input type="hidden" name="txtidloja" value="<?=$id_loja?>">
                <input type="text" class="form-control" name="txtnome" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['nome']:'')?>" required>
            </div>
            <div class="col-md-2">
                <label>Valor</label>
                <input type="text" name="txtvalor" onkeyup="moeda(this)" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?number_format($editar['valor'], 2, ',', '.'):'')?>">
            </div>
            <div class="col-md-2">
                <label>Quantidade</label>
                <input type="text" class="form-control" name="txtquantidade" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['quantidade']:'')?>" required>
            </div>
            <div class="col-md-2">
                <label>Ativo</label>
                <input type="text" name="txtativo" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['ativo']:'')?>" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label>Descrição</label>
                <textarea class="form-control" rows="5" name="txtdescricao"><?=(($acao == 'editar')?$editar['descricao']:'')?></textarea>
            </div>
            <div class="col-md-6">
                <label>Foto Principal</label>
                <input type="file" name="txtfotoprincipal" class="form-control">
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
    