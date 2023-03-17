# AULA PHP - Formulários - Curso em Vídeo com Professor Gustavo Guanabara

### Nessa Aula vou salientar apenas aquelas funções que ele apresentar e que eu não tiver o conhecimento:

Vamos criar um arquivo HTML simples para nos levar ao código php
````html
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulários HTML com PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Formulários com PHP</h1>
  </header>
  <section>
    <form action="register.php" method="get">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="idnome"/>
      <label>Sobrenome</label>
      <input type="text" name="sobrenome" id="idsobrenome"/>
      <input type="submit" value="enviar"/>
    </form>
  </section>
</body>
</html>
````

Agora que o html foi criado e pode enviar a requisição para a página PHP, vamos criar a Páginação de register.php
````php
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
````
