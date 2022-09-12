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
                            <small>Detalhe de seus gastos</small>
                        </h1>

                    </div>

                    <div class="col-xs-6 tabela">
                        <h3>Tabela de gastos</h3>
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