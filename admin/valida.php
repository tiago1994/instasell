<?
	require_once('includes/conexao.php');
	
	if($_POST['txtloginemail'] == "" or $_POST['txtloginsenha'] == ""){
		header('Location: login.php');
		exit();
	}else{
		$email = trim($_POST['txtloginemail']);  
		$senha = md5($_POST['txtloginsenha']);
		$recebe = mysqli_query($link, "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."' AND privilegio = 10 LIMIT 1");
		$busca = mysqli_fetch_array($recebe);
		if(count($recebe) > 0){
			session_start();
			$_SESSION['adminid'] 			= $busca['id'];
			$_SESSION['adminnome'] 			= $busca['nome'];
			$_SESSION['adminemail'] 		= $busca['email'];
			$_SESSION['adminsenha'] 		= $busca['senha'];
			$_SESSION['adminprivilegio'] 	= $busca['privilegio'];

			header('Location: dash.php');
			exit();
		}else{
			header('Location: login.php?erro=1&email='.$email);
			exit();
		}
	}
		
?>