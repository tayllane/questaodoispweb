<?php
session_start();
ob_start();
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)
if($senha){
	include_once 'conexao.php'
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	var_dump($dados);
	$dados['senha'] = password_hash($dados,['senha'], PASSWORD_DEFAULT);
	$result_usuario = "INSERT INTO usuarios(nome, email, usuario, senha) VALUES {
	'".$dados['nome']."',
	'".$dados['email']."',
	'".$dados['usuario']."',
	'".$dados['senha']."',
	)";
	$resultado_usuario = mysqli_query($conn, $result_usuario );
	if($_SERVER['REQUEST_METHOD'] == POST && !(empty($_POST)){
		if(!empty($_POST['nome']) && !empty($_POST)['email'] && !empty($_POST['password'])){
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$existe = ExistUser($usuario, $email, );

		if(!$existe){
			$cmd = "INSERT INTO 'users'('usuario,'email, 'senha') VALUES(NULL, '$usuario', '$email', '$senha') "
			if(!$result_usuario){
				echo"<script>alert('usuario existente no sistema');</alert>";
			}
			else{
			    echo"<script>alert('usuario cadastrado');</alert>";
			}
		}
		}
	}

}
?>

<html>
 <form action="oo.php" method = "POST">
 	Nome de usuario: <input type-text name = usuario><br><br>
 	Senha: <input type-text name = senha><br><br>
<input type = submit>
<h4> Cadastrar </h4>
<a href="=cadastrar.html">Crie Gratis</a>
</form>
</html>