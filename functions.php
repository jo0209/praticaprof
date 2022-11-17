<?php

function saldo_total_user()
{
    select_saldo_user();
    gasto_total();
}

function gasto_total()
{
    //SELECT DA SOMA TOTAL DAS CONTAS DO USUARIO
    global $connection;
    $query = "SELECT sum(valor_despesa) AS valor_despesa_soma FROM conta";
    $select_saldo = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($select_saldo);
    $select_saldo = $row['valor_despesa_soma'];
    echo "<div class='huge'>{$select_saldo}</div>";
}

function confirm($result)
{
    //CONFIRMA A CONEXÃO COM O BANCO
    global $connection;
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function listar_contas()
{
    //SELECT TODAS AS CONTAS DO USUÁRIO
    global $connection;
    $query = "SELECT * FROM conta";
    $select_all_contas = mysqli_query($connection, $query);
    $counts_contas = mysqli_num_rows($select_all_contas);

    echo "<div class='huge'>{$counts_contas}</div>";
}

function select_saldo_user()
{
    //SELECT DO SALDO TOTAL DO USUÁRIO
    global $connection;
    $query = "SELECT saldo_user FROM usuario where id_user = 1";
    $select_saldo = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($select_saldo);
    $select_saldo = $row['saldo_user'];
    echo "<div class='huge'>{$select_saldo}</div>";
}

function insert_despesa()
{
    //INSERT DESPESA
    global $connection;
    if (isset($_POST['submit'])) {
        $tipo_despesa = $_POST['tipo_despesa'];
        $titulo_despesa = $_POST['titulo_despesa'];
        $valor_despesa = $_POST['valor_despesa'];
        $data_despesa = $_POST['data_despesa'];

        $query = "INSERT INTO conta(tipo_despesa, titulo_despesa, valor_despesa, data_despesa) ";
        $query .= "VALUES ('{$tipo_despesa}', '{$titulo_despesa}', '{$valor_despesa}', '{$data_despesa}')";

        $create_despesa_query = mysqli_query($connection, $query);

        if (!$create_despesa_query) {
            die('QUERY FAILED' . mysqli_error($connection));
        }
    }
}

function delete_despesa()
{
    //DELETE DESPESA
    global $connection;
    if (isset($_GET['delete'])) {
        $id_despesa = $_GET['delete'];

        $query = "DELETE FROM conta WHERE id_despesa = {$id_despesa}";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FALHOU" . mysqli_error($connection));
        }
        header("Location: categories.php");
    }
}

function show_all_despesas()
{
    //SEARCH DESPESAS
    global $connection;
    $query = "SELECT * FROM conta";
    $select_contas = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_contas)) {
        $id_despesa = $row['id_despesa'];
        $tipo_despesa = $row['tipo_despesa'];
        $titulo_despesa = $row['titulo_despesa'];
        $valor_despesa = $row['valor_despesa'];
        $data_despesa = $row['data_despesa'];

        echo "<tr>";
        echo "<td>{$id_despesa}</td>";
        echo "<td>{$titulo_despesa}</td>";
        echo "<td>{$tipo_despesa}</td>";
        echo "<td>{$valor_despesa}</td>";
        echo "<td>{$data_despesa}</td>";
        echo "<td><a href='categories.php?delete={$id_despesa}'>Deletar</a></td>";
        echo "<td><a href='categories.php?edit={$id_despesa}'>Editar</a></td>";
        echo "</tr>";
    }
}
