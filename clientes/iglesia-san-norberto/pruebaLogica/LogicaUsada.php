<?php
class LogicaUsada{
    function LogicaUsada(){
    }

    function mensajeP($mensaje,$pagina){
        header("Refresh: 0; URL=".$pagina);
        echo "<script>alert('$mensaje');</script>";
    }
}
?>