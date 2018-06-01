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

	<body>
	<div class="container">
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
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="/index.php/librarian">
							<span class="glyphicon glyphicon-home"></span>
							Home
						</a>
					</li>
					<li class="active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-bookmark"></span>
							Issues
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/index.php/librarian/view/issue">Issue Book</a></li>
							<li><a href="/index.php/librarian/view/renew">Renew Book</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="/index.php/librarian/view/return">Return Book</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-user"></span>
							Users
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/index.php/librarian/view/adduser">Add User</a></li>
							<li><a href="/index.php/librarian/view/suspenduser">Suspend User</a></li>
							<li><a href="/index.php/librarian/view/revokesuspension">Revoke Suspension</a></li>
							<li><a href="/index.php/librarian/view/removeuser">Remove User</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-book"></span>
							Books
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/index.php/librarian/view/addauthor">Add Author</a></li>
							<li><a href="/index.php/librarian/view/addbook">Add Book</a></li>
							<li><a href="/index.php/librarian/view/addcopy">Add Copies</a></li>
							<li><a href="/index.php/librarian/view/addpublisher">Add Publisher</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-list-alt"></span>
							View
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/index.php/librarian/view/viewpublishers">View Publishers</a></li>
							<li><a href="/index.php/librarian/view/viewauthors">View Authors</a></li>
							<li><a href="/index.php/librarian/view/viewbooks/all">View All Books</a></li>
							<li><a href="/index.php/librarian/view/viewbooks/available">View Available Books</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="/index.php/librarian/view/viewissues/all">View Issue History</a></li>
							<li><a href="/index.php/librarian/view/viewissues/pending">View Pending Issues</a></li>
						</ul>
					</li>
				</ul>
				<span class="navbar-right">
					<ul class="nav navbar-nav">
						<li class="dropdown navbar-right active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-cog"></span>
								<span style="font-weight:bold;"><?= $realname ?></span>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Profile Actions</li>
								<li><a href="/index.php/librarian/view/viewprofile">View Profile</a></li>
								<li><a href="/index.php/librarian/view/editprofile">Edit Profile</a></li>
								<li><a href="/index.php/librarian/view/changepassword">Change Password</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">User Actions</li>
								<li><a href="/index.php/login/logout">Logout</a></li>
							</ul>
						</li>
					</ul>

				</span>
			</div>
		</div>
	</div>
	</div>
