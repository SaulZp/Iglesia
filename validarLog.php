<?PHP 
session_start();
$nom=$_POST['correo'];
$pass=md5($_POST['contra']);
echo "$pass";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"iglesia");
$result=mysqli_query($link,"select id_usuario,username,correo,password from usuario where correo='$nom'");
$result2=mysqli_query($link,"select username,correo,password from administrador where correo='$nom'");

if($row=mysqli_fetch_array($result)){
	//echo "Si existe el usuario <br>";
	if($row['password']==$pass){
		//echo "Es correcto el password<br>";
		$_SESSION['username']=$row['username'];
		$_SESSION['id_us']=$row['id_usuario'];
		
		header("Location:indexU.php");
		/*if($row['tipo']==1){
			
		}							user
		if($row['tipo']==0){
			header("Location:indexA.php");
		} */
		
	}else{
		header("Location:error2.html");
		
	}
}else{
	
	
	if($row=mysqli_fetch_array($result2)){
	//echo "Si existe el usuario <br>";
		if($row['password']==$pass){
			//echo "Es correcto el password<br>";
			$_SESSION['username']=$row['username'];
		
			header("Location:admin/index.php");
			/*if($row['tipo']==1){
			
			}							admin
			if($row['tipo']==0){
				header("Location:indexA.php");
			} */
		
		}else{
			header("Location:error2.html");
		
		}
	}else{
		header("Location:error1.html");
	
	}
	
}
	


?>