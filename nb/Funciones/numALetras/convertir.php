<?php 
class CifrasEnLetras {
 
  //---------------------------------------------
  // CONSTANTES
  const PREFIJO_ERROR = 'Error: ';
  const COMA = ',';
  const MENOS = '-';
 
  //---------------------------------------------
  // ENUMERACIONES
  const NEUTRO = 'neutro';
  const MASCULINO = 'masculino';
  const FEMENINO = 'femenino';
 
  //---------------------------------------------
  // GLOBAL
  public static $SEPARADOR_SEIS_CIFRAS = " ";
 
  //---------------------------------------------

    // LISTAS
     
    public static $listaUnidades = array( // Letras de los números entre el 0 y el 29
        "cero", "un", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve",
        "diez", "once", "doce", "trece", "catorce", "quince", "dieciséis", "diecisiete", "dieciocho", "diecinueve",
        "veinte", "veintiún", "veintidós", "veintitrés", "veinticuatro", "veinticinco", "veintiséis", "veintisiete", "veintiocho",
        "veintinueve"
    );
    public static $listaDecenas = array( // Letras de las decenas
        "", "diez", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa"
    );
    public static $listaCentenas = array ( // Letras de las centenas
        "", "cien", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos",
        "novecientos"
    );
    public static $listaOrdenesMillonSingular = array ( // Letras en singular de los órdenes de millón
        "", "millón", "billón", "trillón", "cuatrillón", "quintillón",
        "sextillón", "septillón", "octillón", "nonillón", "decillón",
        "undecillón", "duodecillón", "tridecillón", "cuatridecillón", "quidecillón",
        "sexdecillón", "septidecillón", "octodecillón", "nonidecillón", "vigillón"
    );
    public static $listaOrdenesMillonPlural = array ( // Letras en plural de los órdenes de millón
        "", "millones", "billones", "trillones", "cuatrillones", "quintillones",
        "sextillones", "septillones", "octillones", "nonillones", "decillones",
        "undecillones", "duodecillones", "tridecillones", "cuatridecillones", "quidecillones",
        "sexdecillones", "septidecillones", "octodecillones", "nonidecillones", "vigillones"
    );

    // ORDINALES
     
    public static $listaUnidadesOrdinales = array ( // Letras de los ordinales entre 0º y 19º
        "ningún", "primer", "segundo", "tercer", "cuarto", "quinto", "sexto", "séptimo", "octavo", "noveno",
        "décimo", "undécimo", "duodécimo", "decimotercer", "decimocuarto", "decimoquinto", "decimosexto", "decimoséptimo", "decimoctavo", "decimonoveno"
    );
    public static $listaDecenasOrdinales = array ( // Letras de las decenas ordinales
        "", "décimo", "vigésimo", "trigésimo", "cuadragésimo", "quincuagésimo", "sexagésimo", "septuagésimo", "octogésimo", "nonagésimo"
    );
    public static $listaCentenasOrdinales = array ( // Letras de las centenas ordinales
        "", "centésimo", "ducentésimo", "tricentésimo", "cuadringentésimo", "quingentésimo", "sexcentésimo", "septingentésimo", "octingentésimo", "noningentésimo"
    );
    public static $listaPotenciasDiezOrdinales = array ( // Letras de las potencias de diez ordinales
        "", "décimo", "centésimo", "milésimo", "diezmilésimo", "cienmilésimo", "millonésimo"
    );
//---------------------------------------------
  // MÉTODOS PRINCIPALES
 
  /*
    Convierte a letras los números entre 0 y 29
  */
  protected static function convertirUnidades($unidades, $genero='neutro') {
    if ($unidades == 1) {
      if ($genero == 'masculino') return 'uno';
      elseif ($genero == 'femenino') return 'una';
    }
    else if ($unidades == 21) {
      if ($genero == 'masculino') return 'veintiuno';
      elseif ($genero == 'femenino') return 'veintiuna';
    }
    return self::$listaUnidades[$unidades];
  }
 
  /*
    Convierte a letras las centenas
  */
  protected static function convertirCentenas($centenas, $genero='neutro') {
    $resultado = self::$listaCentenas[$centenas];
    if ($genero == 'femenino') $resultado = str_replace('iento','ienta', $resultado);
    return $resultado;
  }
 
  /*
    Primer centenar: del cero al noventa y nueve
  */
  public static function convertirDosCifras($cifras, $genero='neutro') {
    $unidad = $cifras % 10;
    $decena = intval($cifras / 10);
    if ($cifras < 30) return self::convertirUnidades($cifras, $genero);
    elseif ($unidad == 0) return self::$listaDecenas[$decena];
    else return self::$listaDecenas[$decena].' y '.self::convertirUnidades($unidad, $genero);
  }
 
  /*
    Primer millar: del cero al novecientos noventa y nueve
  */
  public static function convertirTresCifras($cifras, $genero='neutro') {
    $decenas_y_unidades = $cifras % 100;
    $centenas = intval($cifras / 100);
    if ($cifras < 100) return self::convertirDosCifras($cifras, $genero);
    elseif ($decenas_y_unidades == 0) return self::convertirCentenas($centenas, $genero);
    elseif ($centenas == 1) return 'ciento '.self::convertirDosCifras($decenas_y_unidades, $genero);
    else return self::convertirCentenas($centenas, $genero).' '.self::convertirDosCifras($decenas_y_unidades, $genero);
  }
 
  /*
    Primer millón: del cero al novecientos noventa y nueve mil noventa y nueve
  */
  public static function convertirSeisCifras($cifras, $genero='neutro') {
    $primer_millar = $cifras % 1000;
    $grupo_miles = intval($cifras / 1000);
    $genero_miles = $genero=='masculino'? 'neutro': $genero;
    if ($grupo_miles == 0) return self::convertirTresCifras($primer_millar, $genero);
    elseif ($grupo_miles == 1) {
      if ($primer_millar == 0) return 'mil';
      else return 'mil '.self::convertirTresCifras($primer_millar, $genero);
    }
    elseif ($primer_millar == 0) return self::convertirTresCifras($grupo_miles, $genero_miles).' mil';
    else return self::convertirTresCifras($grupo_miles, $genero_miles).' mil '.self::convertirTresCifras($primer_millar, $genero);
  }



?>