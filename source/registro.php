<?php
include_once 'db_connect.php';
$error_msg = "";
if (isset($_POST['usr'], $_POST['pwd1'], $_POST['pwd2'])) {
    $username = filter_input(INPUT_POST, 'usr', FILTER_SANITIZE_STRING);
    $password1 = filter_input(INPUT_POST, 'pwd1', FILTER_SANITIZE_STRING);
    $password2 = filter_input(INPUT_POST, 'pwd2', FILTER_SANITIZE_STRING);

    $prep_stmt = "SELECT idUsuario FROM Usuarios WHERE usuario = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == "1") {   
            $error_msg.="usuario ya existe con ese nombre";
			//echo '<script> alert("Ese usuario ya existe, lo lamentamos");</script>';
			header('Location: ../index.php');
        }
    } 
    if (empty($error_msg) && strcmp($password1, $password2) == 0) {
		$passEncripted= md5($password1);
        $role = "registrado";
        $hoy = date("Y-m-d");
    	if ($insert_stmt = $mysqli->prepare("INSERT INTO Usuarios (usuario, contrasenya,rol,fecharegistro) VALUES (?,?,?,?)")) {
            $insert_stmt->bind_param('ssss', $username, $passEncripted, $role,$hoy);
            if (! $insert_stmt->execute()) {
                header('Location: ../index.php');
                exit();
        	}
        }
        header('Location: ../index.php');
    }else{
		//echo '<script> alert("Las contraseñas no coinciden");</script>';
		header('Location: ../index.php');
	}
}
?>