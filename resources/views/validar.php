
<?php
//include("db_connection.php");

//$miconexion = new connect_db;


session_start();
	require("db_connection.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM persona WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['contrasena']){
			$_SESSION['user']=$f2['nombre'];
			echo '<script>alert("Bienvenido")</script> ';
			echo "<script>location.href='../views/principal2.php'</script>";
		
		}
	}else{
		
		echo '<script>alert("Este usuario no existe, por favor realiza el registro para iniciar")</script> ';
		echo "<script>location.href='registro.php'</script>";	

	}

?>