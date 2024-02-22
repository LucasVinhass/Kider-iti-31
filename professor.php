<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'include/head.php'?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Carregando...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php include 'include/navbar.php'; ?>

        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Professor</h1>
                                <form action="insets/inset_professor.php" method="post">
                                    <div class="row g-3">
                                        <div class="col-sm-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gname" placeholder="nome" name="nome">
                                                <label for="gname">Nome</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gmail" placeholder="formação" name="formacao">
                                                <label for="gmail">Formação</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname" placeholder="Tempo de experiência" name="tempoExp">
                                                <label for="cname">Tempo de experiência</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cage" placeholder="Escola Anterior" name="escolaAnt">
                                                <label for="cage">Escola Anterior</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cage" placeholder="Turma disponível" name="turnoDis">
                                                <label for="cage">Turno disponível</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->

        <?php include 'include/footer.php'; ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    
    <script src="js/main.js"></script>
</body>

</html>