<?php
 session_start();
 require_once 'db_connect.php';
 
 
 $error = false;
 
 if (isset($_POST['inputLogin'], $_POST['inputLoginPassword'])) {
    $username = filter_input(INPUT_POST, 'inputLogin', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'inputLoginPassword', FILTER_SANITIZE_STRING);
  
  // Trimeamos las cosas raras
  $username = trim($_POST['inputLogin']);
  $username = strip_tags($username);
  $username = htmlspecialchars($username);
  
  $password = trim($_POST['inputLoginPassword']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);
  
	// Comprobamos que está todo bien puesto
  if(empty($username)){
   $error = true;
   echo '<script> alert("Introduce un usuario");</script>';
  }
  if(empty($password)){
   $error = true;
   echo '<script> alert("Introduce una contraseña");</script>';
  }
  
  // Si no hay error, seguimos
  if (!$error) {
   $passwordencriptada= md5($password); // Encriptamos con md5
  
	$prep_stmt = "SELECT idUsuario,usuario FROM Usuarios WHERE usuario = ? and contrasenya = ?";
    $stmt = $mysqli->prepare($prep_stmt);
	$stmt->bind_param('ss', $username,$passwordencriptada);
	$stmt->execute();
	$stmt->bind_result($idUsuario,$usuario);
	while ($stmt->fetch()) {
		if($idUsuario!=null){
			$_SESSION['usr'] = $idUsuario;
			$_SESSION['nombre'] = $usuario;
			//echo $_SESSION['usr'];
			header("Location: ../index.php");
		}else{
			echo "no has iniciado sesion";
		}
   }
   $stmt->close();

  }else{
	  echo '<script> alert("Error desconocido");</script>';
  }
 }

?>