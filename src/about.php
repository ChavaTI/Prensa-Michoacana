<?php
session_start();
if($_SESSION['IdLogin'] == null){
    header('Location:index.html');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Acerca de la Hemeroteca Digital de Ciencia y Prensa Michoacana</title>
</head>
<body>
    <main class="container">
        <header class="row mt-5 mb-5">
            <div class="col-12 text-center">
                <h1>Acerca de la Hemeroteca Digital de Ciencia y Prensa Michoacana</h1>
            </div>
        </header>
        <article>
            <h2>La Hemeroteca Digital de Ciencia y tecnología de la Prensa Michoacana es un repositorio virtual de publicaciones periódicas de carácter histórico, que busca cumplir con los mismos objetivos que guían a la Hemeroteca Nacional de México (HNM): impulsar y favorecer la preservación, conservación y difusión del patrimonio hemerográfico referente a la ciencia y tecnología del Estado de Michoacán.</h2>
        </article>
    </article>
    <footer class="row mt-5 pt-5">
        <div class="col-5 offset-3">
            <p>Pagína web creada por Jennifer Melgoza Tellez y Salvador Hernández López</p>
    </footer>
    </main>
</body>
</html>