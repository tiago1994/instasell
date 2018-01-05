<?
	session_start();
	$_SESSION['pagina'] = 'minha_conta';
    require_once('includes/topo.php');

    $acao   = ((isset($_REQUEST['acao']))?$_REQUEST['acao']:'');
    $id     = ((isset($_REQUEST['id']))?$_REQUEST['id']:'');
?>
    <h2><b>Minha Conta</b></h2>
    <hr>
<?
    require_once('includes/rodape.php');
?>      
    