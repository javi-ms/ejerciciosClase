	<?php
	class connectBD{
		private $dp="";

		public function __construct(){
			$dp = mysqli_connect("localhost", "root", "vidafone" );
			if ($dp->connect_errno) {
		   		printf("Falló la conexión: %s\n", $dp->connect_error);
		    exit();
			}
			//esto es para enviarlo a otro lado
			return $dp;
		}
		function consultaBD($consulta){
			//aqui llamamos a la funcion anterior y la guardamos en una variable
			
			$ConsultaMySql= $this->dp->query($consulta);
			return mysqli_fetch_array($ConsultaMySql);

		}	
	}

	
	?>