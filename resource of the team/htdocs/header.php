<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Keita TV admin</title>
    <link rel="stylesheet" href="./htdocs/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" href="./htdocs/assets/css/Bold-BS4-Cards-with-Hover-Effect-50.css">
    <link rel="stylesheet" href="./htdocs/assets/css/style.css">
    <script src="./htdocs/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="./htdocs/assets/js/sijax/sijax.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php require "sidebar.php"; ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <h3 class="text-dark mb-1"><?php echo $title?></h3>

                </div>
            </nav>