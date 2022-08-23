<?php
function confirm($result){
    global $connection;
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function insert_despesa(){
    //INSERT DESPESA
    global $connection;
    if (isset($_POST['submit'])) {
        $tipo_despesa = $_POST['tipo_despesa'];
        $titulo_despesa = $_POST['titulo_despesa'];
        $valor_despesa = $_POST['valor_despesa'];
    
        $query = "INSERT INTO conta(tipo_despesa, titulo_despesa, valor_despesa) ";
        $query .= "VALUES ('{$tipo_despesa}', '{$titulo_despesa}', '{$valor_despesa}')";

        $create_despesa_query = mysqli_query($connection, $query);

        if (!$create_despesa_query) {
            die ('QUERY FAILED' . mysqli_error($connection));
        }
    }
}

function delete_categories(){
    //DELETE CATEGORIES
    global $connection;
    if (isset($_GET['delete'])) {
        $cat_id = $_GET['delete'];

        $query = "DELETE FROM categories WHERE cat_id = {$cat_id}";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FALHOU" . mysqli_error($connection));
        }
        header("Location: categories.php");
    }
}

function show_all_categories(){
    //SEARCH CATEGORIES
    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

?>