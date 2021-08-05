<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/exercises.css" />
  <title>Exercício</title>
</head>

<body class="exercise">
  <header class="header">
    <h1>Curso PHP</h1>
    <h2>Visualização do Exercício</h2>
  </header>

  <nav class="navigation">
    <a href=<?= "/{$_GET['dir']}/{$_GET['dir']}.php" ?> class="green">Sem formatação</a>
    <a href="index.php" class="red">Voltar</a>
  </nav>
  <main class="main">
    <div class="content">
      <?php
      include "{$_GET['dir']}/{$_GET['dir']}.php"
      //include($_GET['dir'] . '/' . $_GET['file'] . '.php')
      //include(__DIR__ . "{$_GET['dir']}/{$_GET['dir']}.php")
      ?>

    </div>
  </main>
  <footer class="footer">COD3R & ALUNOS ©
    <?=
    date('Y');
    ?>
  </footer>
</body>

</html>