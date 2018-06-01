<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <link href="<?php echo asset_url('css/custom.css'); ?>" rel="stylesheet" type="text/css">




    <title>
        <?= $title ?>
    </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">Library Managment System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav text-center navg">
                <li style="  display: block; margin-left: 20px;"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li style="  display: block; margin-left: 20px;"><a href="<?php echo base_url(); ?>viewpublishers">viewpublishers</a></li>
                <li style="  display: block; margin-left: 20px;"><a href="<?php echo base_url(); ?>about">View Books</a></li>
                <li style="  display: block; margin-left: 20px;"><a href="<?php echo base_url(); ?>Login">Login</a></li>



            </ul>

        </div>
    </nav>
