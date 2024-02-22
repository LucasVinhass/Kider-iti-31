<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include_once('../conexao_bd.php');

        $nome = $_POST['nome'];
        $formacao = $_POST['formacao'];
        $tempoExp = $_POST['tempoExp'];
        $escola = $_POST['escola'];
        $turnoDis = $_POST['turnoDis'];

        $sql = "INSERT INTO professor(nome,formacao,tempoExp,escola,turnoDis) VALUES('$nome','$formacao','$tempoExp','$escola', '$turnoDis')";

        if(executarComando($sql)){
            echo "<script>alert('Professor Cadastrado com sucesso!'); window.location.href = '../professor.php';</script>";
        }else{
            echo "<script>alert('Falha ao cadastrar o professor.'); window.location.href = '../professor.php';</script>";
        }
    ?>
</body>
</html>