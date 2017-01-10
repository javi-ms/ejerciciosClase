<?php 
	/**
	* clase visita
	*/

	class Visita {
		//Declaramos las variables.

		private $mysql;
		//el constructor.

		public function __construct(){
			//nos conectamos mediante el objeto de la clase mysqli.
			//En los parámetros lo dejamos todo por defecto menos el nombre de la base de datos que tiene que ser idéntico.
			//si no da error.
		
			$this->mysql= @new mysqli("localhost", "root", "","fct"); 
			if ($this->mysql->connect_errno){ 
				echo "Error al conectar con la base de datos ".$this->mysql->connect_error; 
			} 
		}

		//Este método mostrará los valores del formulario
		public function mostrar_insertar(){
			echo"
				<table align='center' border='0'>
					<form method='post' action='prueba.php'>
						<tr>
							<td>Alumno:</td>
							<td><input type='text' name='inputAlumno' required  /></td>
						</tr>
						<tr>
							<td>Empresa:</td>
							<td><input type='text' name='inputEmpresa' required /></td>
						</tr>
						<tr>
							<td>Fecha:</td>
							<td align='left'>
								<input type='number' name='inputFechaDia' style = 'width: 40px' min='1' max='31' required />
								<input type='number' name='inputFechaMes' style = 'width: 40px' min='1' max='31' required />
								<input type='number' name='inputFechaAnio'style = 'width: 70px' min='1900' max='2015' required />
							</td>
						</tr>
						<tr>
							<td>Hora:</td>
							<td align='left'>
								<input type='number' name='inputHora' style = 'width: 40px' min='0' max='24' required /> 
								:
								<input type='number' name='inputMinuto' style = 'width: 40px' min='0' max='59' required />
							</td>
						</tr>
						<tr>
							<td align='rigt'>Nota:</td>
							<td><input type='number' name='inputNota' style = 'width: 40px' min='0' max='10' required /></td>
						</tr>
						<tr>
							<td align='center' colspan='2'>
								<input type='submit' name='btn_aceptarInsertar' value='Aceptar'  />
								</form>
								<form method='post' action='prueba.php'>
									<input type='submit' name='btn_cancelar' value='Cancelar' />
								</form>
							</td>
						</tr>
				</table>
			";
		}

		//Creamos el método insertarVisita para meter los datos en el array
		public function insertarVisita($datos){
			//Creamos las variables para usar luego en el insert.

			$alumno = $datos["inputAlumno"];
			$empresa = $datos["inputEmpresa"];
			$dia = $datos["inputFechaDia"];
			$mes = $datos["inputFechaMes"];
			$anio = $datos["inputFechaAnio"];
			$hora = $datos["inputHora"];
			$minutos = $datos["inputMinuto"];
			$nota = $datos["inputNota"];

			//Hacemos la consulta insert e introducimos los valores pasados por parámetros.
			$consulta="insert into fct values(null,'".utf8_decode(htmlentities($alumno))."','".utf8_decode(htmlentities($empresa))."',$dia,$mes,$anio,$hora,$minutos,$nota)"; 

			//Comprobar si la consulta es correcta.
			// $this->mysql->query($consulta);

			if (!$this->mysql->query($consulta)){
				if(strpos($this->mysql->error,"alumno_dia_empresa")!== false){
					echo "<script>alert('los valores alumno, empresa y día están repetidos. Por favor, introduzca otros valores.')</script>";
				}else{
					die("Error en la consulta ".'Error nº'.$this->mysql->errno.'.-'.$this->mysql->error);
				}
			}



		}

		//Esta función muestra la cabecera de la tabla.
		public function cabTabla(){
			echo "<table align='center' border='1'>";
					echo "
						<th>Alumno</th>
						<th>Empresa</th>
						<th>Fecha</th>
						<th>Hora</th>
						<th>Nota</th>
						<th>Acción</th>
					";
		}

		//Función para mostrar el pie de la tabla.
		public function pieTabla(){
			echo "</table>";
		}

		// //El método mostrar, sacará por pantalla los datos del array en una tabla con las acciones que se puede hacer
		// //sobre los distintos campos.
		// //Para ello, creamos un formulario por cada fila para así poder usar posteriormente
		// //Los métodos borrar y modificar.
		public function mostrar(){
			$this->cabTabla();
				$res = $this->mysql->query("select * from fct order by id");
				while ($fila = $res->fetch_array() ){
					echo "<tr>";
						echo "<form action='prueba.php' method='post'>";
								echo "
									<td>".utf8_encode($fila['Alumno'])."</td>
									<td>".utf8_encode($fila['Empresa'])."</td>
									<td>$fila[dia] / $fila[mes] / $fila[anio]</td>
									<td>$fila[Hora] : $fila[minutos]</td>
									<td>$fila[Nota]</td>
								";
							echo "<td>";
								echo "<input type='submit' name='btn_modificar' value='Modificar' /> 
										<input type='submit' name='btn_borrar' value='Borrar' />
										<input type='hidden' name='input_eliminar' value='$fila[id]' />
								";

							echo "</td>";
						echo "</form>";
					echo "</tr>";
				}
			$this->pieTabla();
			
		}

		//El método borrar borrará el elemento pulsado del botón.
		//Recogerá el elemento gracias al input hidden creado en el mostrar.
		public function borrar(){
			if(isset($_POST["btn_borrar"])){
				$consulta="delete from fct where id = $_POST[input_eliminar]";
				$datos= $this->mysql->query($consulta) or
				die("Error en consulta <P>".'Error nº'.$this->mysql->errno.'.-'.$this->mysql->error);
			}
		}

		//Método modificar que llamará al formulario con los datos seleccionados a modificar.
		public function modificar(){
			//Creamos la variable numRegistro para guardar el índice del campo a modificar que posteriormente
			//Usaremos.
			$numRegistro = $_POST['input_eliminar'];
			$res = $this->mysql->query("select * from fct where id = $numRegistro");
			$fila = $res->fetch_array();

			//Formulario con los datos. En cada campo pondremos el valor contenido en  el array.
			echo"
				<table align='center' border='0'>
					<form method='post' action='prueba.php'>
						<tr>
							<td>Alumno:</td>
							<td><input type='text' name='inputAlumnoEditado' value='".utf8_encode($fila['Alumno'])."' required  /></td>
						</tr>
						<tr>
							<td>Empresa:</td>
							<td><input type='text' name='inputEmpresaEditado' value='".utf8_encode($fila['Empresa'])."' required /></td>
						</tr>
						<tr>
							<td>Fecha:</td>
							<td align='left'>
								<input type='number' name='inputFechaDiaEditado' style = 'width: 40px' min='1' max='31' value='".$fila['dia']."' required />
								<input type='number' name='inputFechaMesEditado' style = 'width: 40px' min='1' max='31' value='".$fila['mes']."' required />
								<input type='number' name='inputFechaAnioEditado'style = 'width: 70px' min='1900' max='2015' value='".$fila['anio']."' required />
							</td>
						</tr>
						<tr>
							<td>Hora:</td>
							<td align='left'>
								<input type='number' name='inputHoraEditado' style = 'width: 40px' min='0' max='24' value='".$fila['Hora']."' required /> 
								:
								<input type='number' name='inputMinutoEditado' style = 'width: 40px' min='0' max='59' value='".$fila['minutos']."' required />
							</td>
						</tr>
						<tr>
							<td align='rigt'>Nota:</td>
							<td><input type='number' name='inputNotaEditado' style = 'width: 40px' min='0' max='10' value='".$fila['Nota']."'  required /></td>
						</tr>
						<tr>
							<td align='center' colspan='2'>
								<input type='hidden' name='input_modificar' value='$numRegistro' />
								<input type='submit' name='btn_aceptarModificar' value='Aceptar' />
								</form>
								<form method='post' action='prueba.php'>
									<input type='submit' name='btn_cancelar' value='Cancelar' />
								</form>	
							</td>
						</tr>
				</table>
			";
			
		}

		//El método aceptarModificar lo que hace es guardar en el array los nuevos datos.
		public function aceptarModificar($datos){
			//Luego añadimos los datos modificados a la BBDD
			$consulta="update fct set Alumno = '".utf8_decode(htmlentities($datos['inputAlumnoEditado']))."',Empresa = '".utf8_decode(htmlentities($datos['inputEmpresaEditado']))."',dia = '".$datos['inputFechaDiaEditado']."',mes = '".$datos['inputFechaMesEditado']."',anio = '".$datos['inputFechaAnioEditado']."',Hora = '".$datos['inputHoraEditado']."',minutos = '".$datos['inputMinutoEditado']."',Nota = '".$datos['inputNotaEditado']."' where id = $datos[input_modificar]";
			// $datos= $this->mysql->query($consulta) or
			// die("Error en consulta <P>".'Error nº'.$this->mysql->errno.'.-'.$this->mysql->error);	
			if (!$this->mysql->query($consulta)){
				if(strpos($this->mysql->error,"alumno_dia_empresa")!== false){
					echo "<script>alert('Los valores alumno, empresa y día pertenecen a otro registro creado previamente. Por favor, introduzca otros valores.')</script>";
				}else{
					die("Error en la consulta".'Error nº'.$this->mysql->errno.'.-'.$this->mysql->error);
				}
			}
		}

		public function __destruct(){
 			//Hemos terminado, cerramos la conexión. 
 			$this->mysql->close(); 
		}
	}




 ?>