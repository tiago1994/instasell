<?
	session_start();
	$_SESSION['pagina'] = 'minha_conta';
    require_once('includes/topo.php');

    $sql_lojista = mysqli_query($link, 'SELECT * FROM lojista WHERE id = "'.$_SESSION['lojistaid'].'" LIMIT 1');
    $lojista = mysqli_fetch_array($sql_lojista);

    if(isset($_POST['botao_atualizar_conta'])){
    	$nome 	= $_POST['nome'];
        $senha  = MD5($_POST['senha']);
    	$cpf 	= $_POST['cpf'];
    	if($_POST['senha'] != ''){
    		$atualiza = mysqli_query($link, 'UPDATE lojista SET nome = "'.$nome.'", senha = "'.$senha.'", cpf = "'.$cpf.'" WHERE id = "'.$_SESSION['lojistaid'].'" LIMIT 1');
    	}else{
    		$atualiza = mysqli_query($link, 'UPDATE lojista SET nome = "'.$nome.'", cpf = "'.$cpf.'" WHERE id = "'.$_SESSION['lojistaid'].'" LIMIT 1');
    	}
    	if($atualiza){
    		header('Location: minha_conta.php?retorno=1');
            exit();
    	}else{
    		header('Location: minha_conta.php?retorno=2');
            exit();
    	}
    }
?>
    <h2><b>Minha Conta</b></h2>
    <hr>
    <form method="POST">
        <div class="row">
            <div class="col-md-6">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="<?=$lojista['nome']?>">
            </div>
            <div class="col-md-6">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" value="<?=$lojista['email']?>" disabled>
            </div>
        </div>
        <br>
    	<div class="row">
    		<div class="col-md-3">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control" value="<?=$lojista['cpf']?>">
            </div>
            <div class="col-md-3">
    			<label>Senha</label>
    			<input type="password" name="senha" class="form-control" value="">
    		</div>
    	</div>
    	<hr>
    	<div class="row">
			<div class="col-md-12">
				<input type="submit" name="botao_atualizar_conta" value="Atualizar Conta" class="btn btn-primary pull-right">
			</div>
    	</div>
    </form>
<?
    require_once('includes/rodape.php');
?>      
    