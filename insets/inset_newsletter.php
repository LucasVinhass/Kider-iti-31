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

        $email = $_POST['email'];

        $sql = "INSERT INTO newsletter (email) VALUES('$email')";

        if(executarComando($sql)){
            echo "<script>alert('Email cadastrado na newsletter!'); window.location.href = '../index.php';</script>";
        }else{
            echo "<script>alert('Falha ao cadastrar o email'); window.location.href = '../index.php';</script>";
        }
    ?>
</body>
</html>