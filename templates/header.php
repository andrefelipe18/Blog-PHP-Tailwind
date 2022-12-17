<?php
include_once('helpers/url.php');
include_once('data/categories.php'); // $categories acessando o array de categorias
include_once('data/posts.php'); // $posts acessando o array de posts
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ESTILO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Poppins:wght@100;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $BASE_URL ?>/img/logo.jpg" type="image/x-icon">
    <title>Blog Codar || André</title>
</head>

<body class="h-screen relative font-poppins">
    <header class="bg-slate-800 flex content-center justify-evenly p-8 w-full">
        <a href="<?= $BASE_URL ?>" class="">
            <img src="<?= $BASE_URL ?>/img/logo.jpg" alt="logo" class="w-12">
        </a>
        <nav class="">
            <ul class="flex content-center justify-center  uppercase text-white text-center">
                <li class="p-2 m-1 hover:text-gray-500 hover:underline transition duration-100"><a href="<?= $BASE_URL ?>">Home</a></li>
                <li class="p-2 m-1 hover:text-gray-500 hover:underline transition duration-100"><a href="<?= $BASE_URL ?>">Categorias</a></li>
                <li class="p-2 m-1 hover:text-gray-500 hover:underline transition duration-100"><a href="<?= $BASE_URL ?>">Sobre</a></li>
                <li class="p-2 m-1 hover:text-gray-500 hover:underline transition duration-100"><a href="<?= $BASE_URL ?>/contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>