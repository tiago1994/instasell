<?
    session_start();
    $_SESSION['pagina'] = 'compras';
    require_once('includes/topo.php');
    $acao           = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id             = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');
    $sql            = mysqli_query($link, 'SELECT * FROM venda WHERE id_cliente = "'.$_SESSION['clienteid'].'" AND id = "'.$id.'" LIMIT 1');
    
    if(!$sql){
        header('Location: compra.php');
        exit();
    }
    $venda = mysqli_fetch_array($sql);
    
    $sql_produto = mysqli_query($link, 'SELECT * FROM loja_produto WHERE id = "'.$venda['id_loja_produto'].'" LIMIT 1');
    $produto = mysqli_fetch_array($sql_produto);
    $sql_loja = mysqli_query($link, 'SELECT * FROM loja WHERE id = "'.$venda['id_loja'].'" LIMIT 1');
    $loja = mysqli_fetch_array($sql_loja);
?>
    <h2><b>Compra #<?=$id?></b> <a href="compras.php" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Voltar</a></h2>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h3>Produto</h3><hr>
            <label><?=$produto['nome']?></label>
            <p><?=$produto['descricao']?></p>
            <span>Quantidade: <b><?=$venda['quantidade']?></b></span><br>
            <span>Valor Unitário: <b>R$<?=number_format($venda['valor_unitario'], 2, ',', '.')?></b></span><br>
            <span>Valor Total: <b>R$<?=number_format($venda['valor_total'], 2, ',', '.')?></b></span>
        </div>
        <div class="col-md-6">
            <h3>Loja</h3><hr>
            <label><?=$loja['nome']?></label><br>
            <label><b>Endereço: </b><?=$loja['endereco']?>, <?=$loja['numero']?> - <?=$loja['cidade']?>/<?=$loja['estado']?></label><br>
        </div>
    </div>
<?
    require_once('includes/rodape.php');
?> 