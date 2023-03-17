<?php
class vehiculo{
    //Atributos de la clase
    private $matricula;
    private $marca;
    private $modelo;
    private $color;
    private $precio;

    //Métodos
    public function __construct($mat,$mar,$mod,$col,$pre){
        $this->matricula = $mat;
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->color = $col;
        $this->precio = $pre;
    }

    public function setMarca($mar){
        $this->marca = $mar;
    }

    public function conducir(){
        echo "estamos conduciendo un " . $this->marca . " " . $this->modelo;
    }

    public function __toString(){
        $str = "<p><b>Matrícula: " . $this->matricula . "</b></p>";
        $str .= "<p><b>Marca: " . $this->marca . "</b></p>";
        $str .= "<p><b>Modelo: " . $this->modelo . "</b></p>";
        $str .= "<p><b>Color: " . $this->color . "</b></p>";
        return $str;
    }

    public function __call($n, $arg){
        echo "Error en el uso del objeto: No existe el método $n";
        echo "<p>Los parámetros pasados son:</p>";
        echo "<ul>";
        foreach($arg as $k=>$v)
            echo "<li>$k : $v </li>";
        echo "</ul>";

    }
}
?>