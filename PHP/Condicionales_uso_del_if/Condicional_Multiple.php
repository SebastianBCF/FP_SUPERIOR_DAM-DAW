<?php
if ($_SERVER["REMOTE_METHOD"]=="POST"){
    $EDAD = $_POST[$EDAD];
if ($EDAD <18 ){
    echo "eres menor de edad ";
}else { 
    if ($EDAD >=18  && $EDAD <=65){
        echo "eres un adulto";
    }else{
        echo"eres jubilado";
    }
  }
}
?>
