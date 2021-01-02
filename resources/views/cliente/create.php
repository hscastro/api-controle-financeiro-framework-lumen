<html>
	<head>
		<meta charset="utf-8" />
		<title>página de cadastro</title>
	</head>
	<body>
		Cadastro de Cliente
		<hr/>
		<form action="/clientes/store" method="post">
			Nome <input type="text" name="nome" value="">
			<br/>
			   <br/>
			CPF <input type="text" name="cpf" value="">
			<br/>
			   <br/>
			RG <input type="text" name="rg" value="">
			<br/>
			   <br/>			   			
			<br/>
			   <br/>
			   <input type="submit" name="Salvar" value="Salvar">
		</form>
	</body>
</html>