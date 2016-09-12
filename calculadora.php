<?php
$operacionesA = $_POST["operaciones"];
$operacion = (string)$operacionesA;

//Variables matriz A:

$a1 = $_POST["a1"];
$veca1 = (int)$a1;

$a2 = $_POST["a2"];
$veca2 = (int)$a2;

$a3= $_POST["a3"];
$veca3= (int)$a3;

$a4 = $_POST["a4"];
$veca4 = (int)$a4;

$a5 = $_POST["a5"];
$veca5 = (int)$a5;

$a6 = $_POST["a6"];
$veca6 = (int)$a6;

$a7 = $_POST["a7"];
$veca7 = (int)$a7;

$a8 = $_POST["a8"];
$veca8= (int)$a8;

$a9 = $_POST["a9"];
$veca9= (int)$a9;

//Variables matriz B:

$b1 = $_POST["b1"];
$vecb1 = (int)$b1;

$b2 = $_POST["b2"];
$vecb2 = (int)$b2;

$b3 = $_POST["b3"];
$vecb3 = (int)$b3;

$b4 = $_POST["b4"];
$vecb4 = (int)$b4;

$b5 = $_POST["b5"];
$vecb5 = (int)$b5;

$b6 = $_POST["b6"];
$vecb6 = (int)$b6;

$b7 = $_POST["b7"];
$vecb7 = (int)$b7;

$b8 = $_POST["b8"];
$vecb8 = (int)$b8;

$b9 = $_POST["b9"];
$vecb9 = (int)$b9;


//Llamado a todas las funciones Switch


switch ($operacion) {



	case "transpuerta":


	
	echo"MATRIZ A<br>";
	echo"[",$veca1,"] [",$veca2,"] [",$veca3,"]<br>";
	echo"[",$veca4,"] [",$veca5,"] [",$veca6,"]<br>";
	echo"[",$veca7,"] [",$veca8,"] [",$veca9,"]<br><br>";

	echo "T= <br>";

	echo"[",$veca1,"] [",$veca4,"] [",$veca7,"]<br>";
	echo"[",$veca2,"] [",$veca5,"] [",$veca8,"]<br>";
	echo"[",$veca3,"] [",$veca6,"] [",$veca9,"]<br><br>";
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";

    break;



	case "SumarMatrices":
	sumaMatricesAB($veca1, $veca2, $veca3, $veca4, $veca5, $veca6, $veca7, $veca8, $veca9,    $vecb1, $vecb2, $vecb3, $vecb4, $vecb5, $vecb6, $vecb7, $vecb8, $vecb9);
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
	break;
	case "RestarMatrices":
	restaMatricesAB($veca1, $veca2, $veca3, $veca4, $veca5, $veca6, $veca7, $veca8, $veca9,    $vecb1, $vecb2, $vecb3, $vecb4, $vecb5, $vecb6, $vecb7, $vecb8, $vecb9);
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
		break;

	case "MultiplicarMatrices":
	multiplicacionMatricesAB($veca1, $veca2, $veca3, $veca4, $veca5, $veca6, $veca7, $veca8, $veca9,    $vecb1, $vecb2, $vecb3, $vecb4, $vecb5, $vecb6, $vecb7, $vecb8, $vecb9);
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
		break;
	default:
	echo "El valor seleccionado no es valido";
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
		break;

}



function sumaMatricesAB($na1, $na2, $na3, $na4, $na5, $na6, $na7, $na8, $na9, $nb1, $nb2, $nb3, $nb4, $nb5, $nb6, $nb7, $nb8, $nb9) {

	$resultado1 = $na1 + $nb1;
	$resultado2 = $na2 + $nb2;
	$resultado3 = $na3 + $nb3;
	$resultado4 = $na4 + $nb4;
	$resultado5 = $na5 + $nb5;
	$resultado6 = $na6 + $nb6;
	$resultado7 = $na7 + $nb7;
	$resultado8 = $na8 + $nb8;
	$resultado9 = $na9 + $nb9;

echo "El resultado de la suma de la matriz A y la matriz B es:<br><br>"."(".$resultado1.")"."(".$resultado2.")"."(".$resultado3.")"."<br>"."(".$resultado4.")"."(".$resultado5.")"."(".$resultado6.")"."<br>"."(".$resultado7.")"."(".$resultado8.")"."(".$resultado9.")";
}

//Restar matrices:*******************************************************************************

function restaMatricesAB($na1, $na2, $na3, $na4, $na5, $na6, $na7, $na8, $na9, $nb1, $nb2, $nb3, $nb4, $nb5, $nb6, $nb7, $nb8, $nb9) {

	$resultado1 = $na1 - $nb1;
	$resultado2 = $na2 - $nb2;
	$resultado3 = $na3 - $nb3;
	$resultado4 = $na4 - $nb4;
	$resultado5 = $na5 - $nb5;
	$resultado6 = $na6 - $nb6;
	$resultado7 = $na7 - $nb7;
	$resultado8 = $na8 - $nb8;
	$resultado9 = $na9 - $nb9;


echo "El resultado de la resta de la matriz A y la matriz B es:<br><br>"."(".$resultado1.")"."(".$resultado2.")"."(".$resultado3.")"."<br>"."(".$resultado4.")"."(".$resultado5.")"."(".$resultado6.")"."<br>"."(".$resultado7.")"."(".$resultado8.")"."(".$resultado9.")";
	}

//Multiplicar matrices:**************************************************************************

function multiplicacionMatricesAB($na1, $na2, $na3, $na4, $na5, $na6, $na7, $na8, $na9, $nb1, $nb2, $nb3, $nb4, $nb5, $nb6, $nb7, $nb8, $nb9) {

	$resultado1 = (($na1 * $nb1) + ($na2 * $nb4) + ($na3 * $nb7));
	$resultado2 = (($na1 * $nb2) + ($na2 * $nb5) + ($na3 * $nb8));
	$resultado3 = (($na1 * $nb3) + ($na2 * $nb6) + ($na3 * $nb9));

	$resultado4 = (($na4 * $nb1) + ($na5 * $nb4) + ($na6 * $nb7));
	$resultado5 = (($na4 * $nb2) + ($na5 * $nb5) + ($na6 * $nb8));
	$resultado6 = (($na4 * $nb3) + ($na5 * $nb6) + ($na6 * $nb9));

	$resultado7 = (($na7 * $nb1) + ($na8 * $nb4) + ($na9 * $nb7));
	$resultado8 = (($na7 * $nb2) + ($na8 * $nb5) + ($na9 * $nb8));
	$resultado9 = (($na7 * $nb3) + ($na8 * $nb6) + ($na9 * $nb9));




}

?>
