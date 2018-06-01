<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?= $title ?>
    </title>

    <title>
        <?php echo $title; ?>
    </title>
    <link href="<?php echo asset_url('css/w3.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset_url('css/readable.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset_url('css/datatables.bootstrap.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset_url('css/jasny.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset_url('css/custom.css'); ?>" rel="stylesheet" type="text/css">




    <?php
			if( $this->session->userdata('message') ) {
				echo "
					<script>
						$(document).ready(function(){
							$('#myModal').modal();
						});
					</script>
				";
			}
		?>
</head>

<body>




    <?php
if( $this->session->userdata('message') ) {
?>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
                        <h4 class="modal-title" id="myModalLabel">Success</h4>
                    </div>
                    <div class="modal-body" style="word-wrap:break-word">
                        <?= $this->session->userdata('message') ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
$this->session->unset_userdata('message');
?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View
        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>viewpublishers">View Publishers</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>viewpauthors">View Authors</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>viewbooks">View All Books</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>viewissues">View Available Books</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>viewpublishers">View Pending Issues</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>

            </div>
        </nav>
