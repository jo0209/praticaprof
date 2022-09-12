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

                        <?php
                        if (isset($_POST['update_saldo'])) {
                        $saldo_user = $_POST['saldo_user'];
                        $query = "UPDATE usuario SET ";
                        $query .= "saldo_user = '{$saldo_user}'";
                        $update_saldo = mysqli_query($connection, $query);
                        }
                        ?>

                        <?php
                        if (isset($_GET['edit_saldo'])) {
                            $saldo_user = $_GET['edit'];
                
                            $query = "SELECT saldo_user FROM saldo_user WHERE id_user = $id_user";
                            $select_saldo_user_id = mysqli_query($connection, $query);
                
                            while ($row = mysqli_fetch_assoc($select_saldo_user_id)) {
                                $valor_despesa = $row['valor_despesa'];
                            }
                            ?>

                            <?php } ?>


                        <div class="col-xs-3">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Tipo da conta</label>
                                    <input value="" type="text" class="form-control" name="saldo_user" />
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="update_saldo" value="Novo saldo">
                                </div>
                            </form>
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