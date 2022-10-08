
<?php 
$nome = "Maycon Felipe Mota";
$email = "maycon.mota@ufms.br";
$curso = "Engenharia de Software - FACOM/UFMS";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><? echo $nome;?> - Perfil</title>
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <div class="conteudo">
    <div class="foto"><img src="foto.png" alt=""></div>
    <div class="apresentacao">
      <span class="nome"><?php echo $nome;?></span>
      <span class="curso"><?php echo $email;?></span>
      <span class="email"><?php echo $curso;?></span>
    </div>
  </div>
  <footer>
    <!-- Insira aqui o texto abaixo substituindo pelo conteudo correto -->
    <span class="data-hora"><?php 
    date_default_timezone_set("America/Campo_Grande");
    echo date("d/m/Y H:i:s");?></span>
    <!-- Você deverá usar PHP e configurar para o timezone de Campo Grande/MS -->
  </footer>
</body>

</html>