<!DOCTYPE html>
	<html lang='es'>
		<head>
			<meta charset='utf-8'>
			<title>INGRESAR</title>
			<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
			<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
			<link type="text/css" rel="stylesheet" href="styleIndex.css"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		</head>
		<body>
			<center>
			<div class='main'>
				<div class='row'>
					<div class='col l6'>
					<form method='post' action='login.php'>
						<div class="row">
							<div class="col l6">
							<div class="input-field">
								<i class="material-icons prefix">account_circle</i>
								<input type='text'  id='usuario' name='usuario' placeholder='Usuario' required class='validate'/>
								<label for="usuario"></label>
								<i class="material-icons prefix">account_circle</i>
								<input type='password' id='pass' name='pass' placeholder='Contraseña' required />
								<label for="pass"></label>
							</div>
						</div>
						</div>
						<button class='btn waves-effect waves-light' type="submit" name='action'>Iniciar Sesión
						<i class="material-icons right">send</i>
					</button>
				</div>
				</div>
			</div>
			<div></div>
			<script type='text/javascript' src='../index.js'></script>
		</body>
	</html>
