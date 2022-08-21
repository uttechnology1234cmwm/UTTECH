<!--Uso de variables, metodos, impresion-->

<?php //Etiqueta de apertura de nuestro programa 

require_once("clase.php");//Requerimiento del archivo 

//Instanciacion del objeto
$operacion1 = new Operacion(10, 10);

//Invocacion de metodos a traves del objeto $operacion1
$totalSum = ,$operacion1-> getSuma();

echo "El resultado de la suma de los dos numeros es:".$totalSum//impresion del resultado a la pantalla
echo "<br><br>"; //Salto de linea

$totalRes = $operacion1->getResta();

echo " El resultado de la resta de los dos numeros es:".$totalRes
echo "<br><br>"; //Salto de linea

$totalMult = $operacion1->getMultiplicacion();

echo" El resultado de la multiplicacion de los dos numeros es:".$totalMult
echo "<br><br>"; //Salto de linea

$totalDiv = $operacion1->getDivicion();

echo" El resultado de la multiplicacion de los dos numeros es:".$totalDiv
echo "<br><br>"; //Salto de linea

?> <!--Etiqueta de cierre de nuestro programa-->