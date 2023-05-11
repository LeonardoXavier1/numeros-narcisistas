<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Numero</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<section class="verificador">
	
	<form method="post">
		<h1>Verificador</h1>
		<h2 class="digite">Digite um número inteiro positivo:</h2>
		<input type="number" name="num" placeholder="Preencha com o número desejado">
		<button type="submit">Verificar</button>
	</form>
	
		 <?php	
	function NumeroNarcisista($num) {
		   $Calc = 0;
		   $NumeroOriginal = $num;
		   $n = strlen($num);
		   while ($NumeroOriginal > 0) {
		      $digit = $NumeroOriginal % 10;
		      $Calc += pow($digit, $n);
		      $NumeroOriginal = floor($NumeroOriginal / 10);
		   }
		   return $Calc == $num;
		}

	
		
		if (isset($_POST['num'])) {
			$num = $_POST['num'];
			if(!empty ($num)){
				if($num > 0){
					if (NumeroNarcisista($num)) {
			   echo "<p>" . $num . " é um número narcisista</p>";
			} else {
			   echo "<p>" . $num . " não é um número narcisista</p>";
			}
			} else {
				echo "Coloque um número positivo.";

			}
				} else {
					echo "<p> Digite um número</p>";
				}
				
			
		} 

	
	?> 
</section>

	
</body>
</html>