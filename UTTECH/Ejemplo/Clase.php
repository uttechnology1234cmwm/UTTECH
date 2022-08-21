<!--Clases en php-->
<?php //Etiqueta de apertura de nuestro programa 

class Operacion{//Nombre de la clase

    //Declaracion de atributos 

    public $numero1 = 0;
    public $numero2 = 0;
    public $resultado = 0;

    //declaracion del metodo constructor 
    function_construct($intnum1, $intnum2){
        //Asignacion de parametros del constructor a las variables 
        $this->numero1 =$intnum1
        $this->numero2 =$intnum2
    }

    //Declaracion de metodos y operaciones que realiza cada operacion
    public function getSuma(){
        $this->resultado = $this->numero1 + $this->numero2;
        return $this->resultado;
    }

    public function getResta(){
        $this->resultado = $this->numero1 + $this->numero2;
        return $this->resultado;
    }

    public function getMultiplicacion(){
        $this->resultado = $this->numero1 * $this->numero2;
        return $this->resultado;
    }

    public function GetDivicion(){
        $this->resultado = $this->numero1 / $this->numero2;
        return $this->resultado;
    }

}

?> <!--Etiqueta de cierre de nuestro programa-->