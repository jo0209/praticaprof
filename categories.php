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
                            Gestão financeira
                            <small>Adicionar gastos</small>
                        </h1>

                        <div>

                        <?php
                        insert_despesa();
                        ?>

                        </div>


                        <div class="col-xs-3">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="titulo_despesa">Nome Custo</label>
                                    <input class="form-control" type="text" name="titulo_despesa">
                                </div>
                                <div class="form-group">
                                    <label for="valor_despesa">Valor do Custo</label>
                                    <input class="form-control" type="text" name="valor_despesa">
                                </div>
                                <div class="form-group">
                                    <label for="tipo_despesa">Tipo do custo</label>
                                    <input class="form-control" type="text" name="tipo_despesa">
                                </div>
                                <div class="form-group">
                                    <label for="data_despesa">Data Custo</label>
                                    <input class="form-control" type="date" name="data_despesa">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Adicionar valor">
                                </div>
                            </form>
                        </div>

                        <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome custo</th>
                                    <th>Tipo</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tbody>

                                <?php
                                show_all_despesas();
                                ?>

                                <?php
                                delete_despesa();
                                ?>
                             
                                </tbody>
                            </thead>
                        </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

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