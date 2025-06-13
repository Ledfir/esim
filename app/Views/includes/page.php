<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?= base_url('/images/favicon.png') ?>">
        <!-- Meta description -->
        <meta name="description" content="Skycel: Compra tu eSIM al instante y disfruta de planes telefónicos con internet ilimitado. Conéctate en cualquier parte del mundo sin chip físico y sin complicaciones.">
        <!-- Title -->
        <title>Skycel, siempre conectados - <?= $this->renderSection('title') ?></title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="<?= base_url('/css/styles.css') ?>">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <?= $this->renderSection('styles') ?>
    </head>
    <body>
        <?= view('includes/header') ?>
        <?= $this->renderSection('content') ?>
        <?= view('includes/footer') ?>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
    <script src="<?= base_url('/js/scripts.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</html>