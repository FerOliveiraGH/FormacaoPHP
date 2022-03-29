<?php

$contasCorrentes = [
    12345678910 => ['nome' => 'Titular da Costa', 'saldo' => 1000],
    98765432199 => ['nome' => 'Titular da Silva', 'saldo' => 2000],
];

?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste de documento</title>
</head>
<body>
    <ul>
    <?php foreach ($contasCorrentes as $conta) { ?>
        <li>Nome: <?php echo $conta['nome']; ?> - Saldo: <?php echo $conta['saldo']; ?></li>
    <?php } ?>
    </ul>
</body>
</html>
