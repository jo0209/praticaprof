<?php
include "includes/header.php";
include "includes/navigation.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gerenciar saldo
                            <small>Gerencie seu saldo, incrementando ou decrementando</small>
                        </h1>

                        <div class="col-xs-3">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="nome custo" for="titulo_despesa">Atualizar saldo</label>
                                    <input class="form-control" type="text" name="atualiza_saldo">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="atualiza_saldo" value="Atualizar saldo">
                                </div>
                            </form>
                        </div>

                        <div class="col-xs-3">
                            <?php
                            $query = "SELECT * FROM usuario WHERE id_user = $id_user";
                            $select_saldo = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($select_saldo)) {
                                $id_user = $row['id_user'];
                            }

                            if (isset($_POST['atualiza_saldo'])) {
                                $salario_user = $_POST['salario_user'];

                                $query = "UPDATE usuario SET ";
                                $query = "salario_user = '{$salario_user}' WHERE id_user = {$id_user}";

                                $atualiza_saldo = mysqli_query($connection, $query);
                                confirm($atualiza_saldo);
                            }
                            ?>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                    <?php
                                    select_saldo_user();
                                    ?>

                                    <div>Saldo total em reais</div>
                                </div>
                            </div>
                        </div>
                        <a href="saldoUser.php">
                            <div class="panel-footer">
                                <span class="pull-left">Veja detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>