<?php
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $op=$_POST["op"];
    
    if($op=="soma"){
        $resul= $n1+$n2;
    }elseif($op=="sub"){
        $resul= $n1-$n2;
    }elseif($op=="div"){
        $resul= $n1/$n2;
    }elseif($op=="mult"){
        $resul= $n1*n2;
    }
    
    echo"resultado: ".$resul;
?>