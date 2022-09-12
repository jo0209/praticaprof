<style>
    #linha {
        border-top: 2px solid black;
    }
</style>

<h1 id="linha"></h1>

<form action="" method="POST">
    <div class="form-group">
        <h3 for="">Editar Contas</h3>
        
        <?php
        if (isset($_GET['edit'])) {
            $id_despesa = $_GET['edit'];

            $query = "SELECT * FROM conta WHERE id_despesa = $id_despesa";
            $select_despesas_id = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_despesas_id)) {
                $id_despesa = $row['id_despesa'];
                $tipo_despesa = $row['tipo_despesa'];
                $titulo_despesa = $row['titulo_despesa'];
                $valor_despesa = $row['valor_despesa'];
                $data_despesa = $row['data_despesa'];
            }
        ?>

        <?php } ?>

        <?php

        if (isset($_POST['update_conta'])) {
            $titulo_despesa = $_POST['titulo_despesa'];
            $tipo_despesa = $_POST['tipo_despesa'];
            $valor_despesa = $_POST['valor_despesa'];
            $data_despesa = $_POST['data_despesa'];

            $query = "UPDATE conta SET ";
            $query .= "titulo_despesa = '{$titulo_despesa}', ";
            $query .= "tipo_despesa = '{$tipo_despesa}', ";
            $query .= "valor_despesa = '{$valor_despesa}', ";
            $query .= "data_despesa = '{$data_despesa}' WHERE id_despesa = {$id_despesa}";

            $update_conta = mysqli_query($connection, $query);
            confirm($update_conta);
        }

        ?>

    </div>

    <div class="form-group">
        <label for="title">Nome Custo</label>
        <input value="<?php echo $titulo_despesa ?>" type="text" class="form-control" name="titulo_despesa" />
    </div>

    <div class="form-group">
        <label for="post_tags">Valor da conta</label>
        <input value="<?php echo $valor_despesa ?>" type="text" class="form-control" name="valor_despesa" />
    </div>

    <div class="form-group">
        <label for="post_status">Tipo da conta</label>
        <input value="<?php echo $tipo_despesa ?>" type="text" class="form-control" name="tipo_despesa" />
    </div>

    <div class="form-group">
        <label for="post_tags">Data do custo</label>
        <input value="<?php echo $data_despesa ?>" type="data" class="form-control" name="data_despesa" />
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_conta" value="Update Conta">
    </div>
</form>