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
                        <form action="" method="post">

                            <table class="table table-bordered table-hover">

                                <div class="row" id="bulkOptionsContainer">
                                    <div class="col-sm-4">
                                        <select class="form-control" name="" id="">
                                            <option value="">Selecione o Mês</option>
                                            <option value="">Janeiro</option>
                                            <option value="">Fevereiro</option>
                                            <option value="">Março</option>
                                            <option value="">Abril</option>
                                            <option value="">Maio</option>
                                            <option value="">Junho</option>
                                            <option value="">Julho</option>
                                            <option value="">Agosto</option>
                                            <option value="">Setembro</option>
                                            <option value="">Outubro</option>
                                            <option value="">Novembro</option>
                                            <option value="">Dezembro</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xs-4">
                                        <input type="submit" class="btn btn-success" name="submit" value="Aplicar">
                                    </div>
                                </div>

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
                        </form>
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