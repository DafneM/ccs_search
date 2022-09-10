<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <title>Busca</title>
    </head>
    <body class="body">
        <div class="container">
            <h2 class="titulo">Seja bem vindo ao sistema <p class="nome-empresa">CCS</p></h2>
            <h3 class="subtitulo">Pesquise um produto</h3>
            <form action="busca.php" method="GET">
            <input class="search-products-input" type="text" name="nome_produto" size="50" placeholder="Nome do produto">
            <button class="search-button">Buscar</button>
        </div>
    </body>
</html>

<style>
    html {
        height: 100%;
    }

    body {
        min-height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .titulo{
        color: #D2691E;
        margin: 0;
    }

    .nome-empresa{
        color: #8B008B;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 900;
        margin: 0;
    }

    .subtitulo{
        color: #4F4F4F;
    }

    .container{
        display: flex;
        justify-items: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Poppins';
    }

    .search-products-input{
        border-radius: 2rem;
        height: 5vh;
        weight: 40vw;
        outline: none;
        padding: 0 2rem 0 1rem;
        border: 2px solid #A9A9A9; 
    }
    
    .search-button{
        background-color: #20B2AA;
        width: 100px;
        height: 5vh;
        border-radius: 0.5rem;
        border: none;
        cursor: pointer;
        color: white;
    }

    .search-button:hover{
        background-color: #48D1CC;
    }
</style>