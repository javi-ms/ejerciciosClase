<html>
	<head>
		<style type="text/css">
		.error{color:#FF0000;}
		</style>t>
	</head>
	<body>
		<?php
			function test_input($data){
				//
				$data = trim($data);
				//
				$data = stripslashes($data);
				//
				$data =htmlspecialchars($data);
				return $data;
			}
			//variable para control de errores
			$logicError = FALSE;
			$nameError = $emailError = $genderError = $webSiteError = "";
			//
			$name = $email = $gender = $comment = $webSite = "";
			

			//Detectamos si el metodo es POST
			if (isset($_POST['submit'])) {
				//boton enviar pulsado, validamos datos
				//NOMBRE
				if (empty($_POST["name"])) {
					$nameError = "Nombre es requerido";
					$logicError = "TRUE";
				}else{
					$name = test_input($_POST["name"]);
					if (!preg_match("/^[a-zA-Z]*$/",$name)) {
						$nameError = "Solo letras y espacios en blanco";
						$logicError = TRUE;
					}
				}
				//EMAIL
				if (empty($_POST["email"])) {
					$emailError = "El email es requerido";
					$logicError = TRUE;
				}else{
					$emailError = test_input($_POST["email"]);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailError = "Formato del correo invalido";
						$logicError = TRUE;
					}
				}
				//WEBSITE
				if (empty($_POST["webSite"])) {
					$webSite ="";//no es requerido
				}else{
					$webSite = test_input($_POST["webSite"]);
					if (!filter_var($webSite, FILTER_VALIDATE_URL)) {
						$webSiteError = "URL invalida";
						$logicError = TRUE;
					}
				}

				//COMENTARIO
				if (empty($_POST["comment"])) {
					$comment = "";

				}else{
					$comment = test_input($_POST["comment"]);
				}

				//GENERO
				if (empty($_POST["gender"])) {
					$genderError = "Genero requerido";
					$logicError = TRUE;
				}else{
					$gender = test_input($_POST["gender"]);
				}


			}
			
		?>
		<form method="post" action="">
		 Name: <input type="text" name="name" value="<?php echo $name;?>">
		   <span class="error">* <?php echo $nameErr;?></span>
		   <br><br>
		   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
		   <span class="error">* <?php echo $emailErr;?></span>
		   <br><br>
		   Website: <input type="text" name="website" value="<?php echo $website;?>">
		   <span class="error"><?php echo $websiteErr;?></span>
		   <br><br>
		   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
		   <br><br>
		   Gender:
		   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female>
		   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male>
		   <span class="error">* <?php echo $genderErr;?></span>
		   <br><br>
		   <input type="submit" name="submit" value="Submit"> 

			

		</form>

	</body>
</html>