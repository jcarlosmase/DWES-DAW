<?php
include_once "vehiculo.php";
class coche extends vehiculo{
    public function __construct($mat,$mar,$mod,$col,$pre){
        parent::__construct($mat,$mar,$mod,$col,$pre);
    }

}
?>