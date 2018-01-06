<?
	session_start();
	$_SESSION['pagina'] = 'compras';
    require_once('includes/topo.php');

    $acao           = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id             = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');
?>
<?
if($acao == ''){
?>
    <h2><b>Compras</b></h2><hr>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th style="width: 10px;">ID</th>
                <th>Loja</th>
                <th>Produto</th>
                <th style="width: 10px;">Qnt</th>
                <th style="width: 50px;">Valor Total</th>
            	<th style="width: 50px;">Opções</th>
            </tr>
        </thead>
        <tbody>
        	<?
        		$sql_venda = mysqli_query($link, 'SELECT * FROM venda WHERE id_cliente = "'.$_SESSION['clienteid'].'"');
        		while($venda = mysqli_fetch_array($sql_venda)){
                    $sql_loja = mysqli_query($link, 'SELECT * FROM loja WHERE id = "'.$venda['id_loja'].'" LIMIT 1');
                    $loja = mysqli_fetch_array($sql_loja);

                    $sql_produto = mysqli_query($link, 'SELECT * FROM loja_produto WHERE id = "'.$venda['id_loja_produto'].'" LIMIT 1');
                    $produto = mysqli_fetch_array($sql_produto);

        			echo '<tr>';
        			echo '<td>'.$venda['id'].'</td>';
                    echo '<td>'.$loja['nome'].'</td>';
                    echo '<td>'.$produto['nome'].'</td>';
        			echo '<td>'.$venda['quantidade'].'</td>';
                    echo '<td><b>R$'.number_format($venda['valor_total'], 2, ',', '.').'</b></td>';
        			echo '<td><a href="compra.php?id='.$venda['id'].'" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Visualizar</a></td>';
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
            <div class="col-md-4">
                <label>Nome</label>
                <input type="hidden" name="txtidloja" value="<?=$id_loja?>">
                <input type="text" class="form-control" name="txtnome" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['nome']:'')?>" required>
            </div>
         	<div class="col-md-4">
                <label>Descrição</label>
                <input type="text" name="txtdescricao" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['descricao']:'')?>">
            </div>
            <div class="col-md-4">
                <label>Valor</label>
                <input type="text" name="txtvalor" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['valor']:'')?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Quantidade</label>
                <input type="text" class="form-control" name="txtquantidade" placeholder="Digite o nome da loja." value="<?=(($acao == 'editar')?$editar['quantidade']:'')?>" required>
            </div>
         	<div class="col-md-4">
                <label>Ativo</label>
                <input type="text" name="txtativo" class="form-control" placeholder="Digite o seu CNPJ." value="<?=(($acao == 'editar')?$editar['ativo']:'')?>" required>
            </div>
            <div class="col-md-4">
                <label>Foto Principal</label>
                <input type="text" name="txtfotoprincipal" class="form-control" placeholder="Digite o seu CPF." value="<?=(($acao == 'editar')?$editar['foto_principal']:'')?>" required>
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
    