<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
        <!-- Favicon -->
        <link rel="icon" href="<?php echo asset_url();?>img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Page plugins -->
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/sweetalert2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/quill/dist/quill.core.css">
        <link rel="stylesheet" href="<?php echo asset_url();?>vendor/clockpicker/dist/bootstrap-clockpicker.min.css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="<?php echo asset_url();?>css/argon.css?v=1.1.0" type="text/css">
        <style>
            td.details-control::before {
                font-family: NucleoIcons;
                content: '\ea11';
                color: #ced4da;
                cursor:pointer;
                position: absolute;
                margin-left:15px;
                font-weight: 350;
                font-style: normal;
                font-variant: normal;
                font-size: .750rem;
            }
            tr.shown td.details-control::before {
                font-family: NucleoIcons;
                content: '\ea0f';
                color: #5e72e4;
                cursor:pointer;
                position: absolute;
                margin-left:15px;
            }
            .pull-right {
                float: right!important;
            }

            .pull-right-container {
                position: absolute;
                right: 10px;
            }

            #deskripsi_narasumber p{
                line-height: 0.6;
                font-size: .8125rem;
                color: #525f7f;
                font-weight: 400;
            }
        </style>
    </head>
    <body>
        <script src="<?php echo asset_url();?>vendor/jquery/dist/jquery.min.js"></script>