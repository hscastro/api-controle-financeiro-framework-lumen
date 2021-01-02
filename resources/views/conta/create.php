<html>
	<head>
		<meta charset="utf-8" />
		<title>página de cadastro</title>
	</head>
	<body>
		Cadastro de Conta
		<hr/>
		<form action="/contas/store" method="post">
			Número <input type="text" name="numero" value="">
			<br/>
			   <br/>
			Cliente
			<select name="cliente">
				<option value=""></option>
				<option value="Antonio">Antonio</option>
				<option value="Pedro Lucas">Pedro Lucas</option>
				
			</select>
			<br/>
			   <br/>
			   <input type="submit" name="Salvar" value="Salvar">
		</form>
	</body>
</html>