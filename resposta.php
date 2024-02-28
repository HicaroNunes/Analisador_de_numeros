<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Analisador de número real</h1>

    <?php 
    $valor = $_POST["num"] ?? 0;
    echo "<p>Analisando o número " .  number_format($valor,3,",",".") . " informado pelo usuário: </p>";

$int = (int) $valor;
$fra = $valor - $int;
    
  echo "<ul><li> A parte inteira do número é <strong>" .  $int . "</strong>"  ;
  echo "<li> A parte fracionaria do número é <strong>" .  number_format($fra,3,",",".") . "</strong>";
  
    
    ?>
  
    <p><a href="index.html"><input type="button" value="Voltar"></a></p>
  </main>  
</body>
</html>