<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="<?= esc($color); ?>">
    <meta name="description" content="<?= esc($description); ?>">
    <meta name="keywords" content="<?= esc($keywords); ?>">
    <link href="/asset/img/pavicon.ico" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="/vendor/icofont/icofont.min.css">
    <link rel="stylesheet" href="/asset/css/template/style.css">
    <title><?= esc($title); ?></title>
</head>

<body>
    <div class="loader-bg">
        <div class="loader"></div>
    </div>
    <?= $this->include('layout/template/header'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/template/wathsapp'); ?>
    <?= $this->include('layout/template/thetop'); ?>
    <?= $this->include('layout/template/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    <script src="/asset/js/template/jquery.351.js"></script>
    <script src="/vendor/typed.js/typed.min.js"></script>
    <script src="/asset/js/template/script.js"></script>
    <script src="/asset/js/template/totop.js"></script>
</body>

</html>