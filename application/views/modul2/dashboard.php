<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="<?= base_url('asset/img/logo.png'); ?>">
	<script src="<?= base_url("asset/jquery.js"); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

	<title><?= $title ?></title>

	<style>
		.materialert {
			position: relative;
			min-width: 100%;
			padding: 15px;
			margin-bottom: 20px;
			margin-top: 15px;
			border: 1px solid transparent;
			border-radius: 4px;
			transition: all 0.1s linear;
			/* webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2); */
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.materialert .material-icons {
			margin-right: 10px;
		}

		.materialert .pink {
			color: white;
		}
	</style>
</head>