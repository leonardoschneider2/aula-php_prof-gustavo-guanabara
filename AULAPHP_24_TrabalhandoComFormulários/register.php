<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulários HTML com PHP - register.php</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>Resultado do Processamento</header>
  <main>
    <?php
      var_dump($_GET) // variáveis superglobais do PHP (4): _GET / _POST / _REQUEST / _COOKIES
      $nome = $_GET["nome"] ?? "sem nome";
      $sobrenome = $GET["sobrenome"] ?? "desconhecido";
      echo "<p>É um grande prazer te conhecer $nome $sobrenome !</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
  </main>
</body>
</html>