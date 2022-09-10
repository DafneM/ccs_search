<?php

ini_set("display_erros", 1);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $link = mysqli_connect('127.0.0.1', 'root', '171000', 'ccs');
    $nome = $_GET['nome_produto'];
    $query = "SELECT Description FROM products WHERE Description LIKE '%$nome%'";
    $result = mysqli_query($link, $query);
}

?>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <h2 class="title-resultado">Resultado</h2>
    </head>
    <body>
    <table>
        <tr>
            <!-- <th>ID produto</th> -->
            <th>Nome do produto</th> 
        </tr>
        <tr>

        <?php
            foreach($result as $product){
                /* $id = $product['ProductID']; */
                $descricao = $product['Description']; 
        ?>
            <!-- <td class="table-item"><?=$id?></td> -->
            <td class="table-item"><?=$descricao?></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>

<style>
    
    body {
        min-height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-family: 'Poppins';
        background-color: #F8F8FF;
    }

    .title-resultado{
        color: #D2691E;
        font-size: 2rem;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        background-color: white;
    }

    table, th, td {
        border: 0.1px solid #A9A9A9;
    }

    th, td {
        padding: 15px;
        text-align: left;
    }

    th {
        height: 50px;
        background-color: #20B2AA;
        color: white;
    }

</style>