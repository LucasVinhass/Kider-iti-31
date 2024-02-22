<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'include/head.php'?>

<body>
    <?php include 'include/navbar.php'; ?>

    <h1 class="text-center">Conheça nossos professores!</h1>
    <?php 
        include 'conexao_bd.php';

        $sql = "SELECT nome, formacao FROM professor";
        $resultado = retornarDados($sql);
        while($linha = mysqli_fetch_assoc($resultado)){
    ?>        
        <p class='text-center'><?php echo $linha['nome'] ?>, Professor(a) de <?php echo $linha['formacao'] ?></p>;
            
    <?php 
    }
    ?>
    
    <?php include 'include/footer.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>