<?php
	require_once("../model/conexao.php");
?>
<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="links">
		<a href="index.php"><h3>ORGANIZAÇÕES</h3></a>
		<a href="cadastro.php"><h3>CADASTRO</h3></a>
		<a href="rs.php"><h3>REDES SOCIAIS</h3></a>
		<a href="inte.php"><h3>INTEGRANTES</h3></a>
		<a href="jgs.php"><h3>JOGOS</h3></a>
	</div>
<div class="cad">
	<form class="arq">
		<div class="cnt">Prêmio</div>
		<input type="number" name="pre" class="inf">
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<br>
		<input type="submit" name="" class="inf">
	</form>
</div>
	<?php
	if ( !isset($_GET['id']) || $_GET['id'] == '' || !isset($_GET['pre']) || $_GET['pre'] == '' ) {
			?> <div class= "aviso"> <?php echo "Faça um cadastro válido"; ?> </div>
			<?php		
		}else{
			$sql = "INSERT INTO org_pre(id_org,id_pre) VALUES('$_GET[id]', '$_GET[pre]')";
			if ($conexao->query($sql) ===TRUE) {
				echo "<script>alert('Produto cadastrado!')</script>";
				header('Locantion: index.php');
			}
		} 
	?>
</body>
</html>