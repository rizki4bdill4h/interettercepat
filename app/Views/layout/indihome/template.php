<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="<?= esc($color); ?>">
    <meta name="description" content="<?= esc($description); ?>">
    <meta name="keywords" content="<?= esc($keywords); ?>">
    <link href="/asset/img/indihome/favicon.ico" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="/vendor/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/asset/css/indihome/style.css">
    <title><?= esc($title); ?></title>
</head>

<body>
    <div class="loader-bg">
        <div class="loader"></div>
    </div>
    <?= $this->include('layout/indihome/header'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/indihome/wathsapp'); ?>
    <?= $this->include('layout/indihome/thetop'); ?>
    <?= $this->include('layout/indihome/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    <script src="/asset/js/template/jquery.351.js"></script>
    <script src="/asset/js/myrepublic/loader.js"></script>
    <script src="/asset/js/template/totop.js"></script>
    <script src="/asset/js/indihome/script.js"></script>
</body>

</html>