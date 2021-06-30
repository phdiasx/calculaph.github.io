<html>
<head>
<title>Minha Calculadora em PHP</title>
</head>
<body>
<form method="POST" action="calcular.php">
Valor 1: 
<input type="text" name="valor1" size="5">
<select name="tipo">
<option selected="selected">Somar</option>
<option>Subtrair</option>
<option>Multiplicar</option>
<option>Dividir</option>
Valor 2: 
<input type="text" name="valor2" size="5">
<input type="submit" name="calcularBtn" value="Calcular" />
</form>
</body>
</html>