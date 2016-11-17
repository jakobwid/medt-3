<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
    <style>
        *{margin: 0; padding: 0;}
    </style>
</head>
<body>
<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
	<h1 style="text-align: center; color: #c22;">$_SERVER im Überblick</h1>
		<table class="table table-striped table-bordered">
			<tr><td>Script-Pfad:</td><td><?php echo $_SERVER['PHP_SELF'];?></td></tr>
			<tr><td>Servername/IP:</td><td><?php echo $_SERVER['SERVER_NAME'];?></td></tr>
			<tr><td>Protokol:</td><td><?php echo $_SERVER['SERVER_PROTOCOL'];?></td></tr>
			<tr><td>Client-IP:</td><td><?php echo $_SERVER['SERVER_ADDR'];?></td></tr>
			<tr><td>URI:</td><td><?php echo $_SERVER['SCRIPT_NAME'];?></td></tr>
			<tr><td>Server-info:	</td><td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td></tr>
		</table>
	</div>
</div>

</body>
</html>