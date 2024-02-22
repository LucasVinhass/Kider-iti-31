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

        $nomeCrianca = $_POST['nomeCrianca'];
        $nomePais = $_POST['nomePais'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO pergunta(nomeCrianca,nomePais,email,idade,mensagem) VALUES('$nomeCrianca','$nomePais','$email','$idade', '$mensagem')";

        if(executarComando($sql)){
            echo "<script>alert('Mensagem enviada!'); window.location.href = '../index.php';</script>";
        }else{
            echo "<script>alert('Falha ao enviar a mensagem'); window.location.href = '../index.php';</script>";
        }
    ?>
</body>
</html>