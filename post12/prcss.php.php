<?php
$maior=0;
$vetor= array();
$vetor[0]=$_POST["n1"];
$vetor[1]=$_POST["n2"];
$vetor[2]=$_POST["n3"];
$vetor[3]=$_POST["n4"];
$vetor[4]=$_POST["n5"];
for($i=0;$i<=4;$i++){
    if($maior<$vetor[$i]){
        $maior=$vetor[$i];
     }
    
}
echo"maior nº: ".$maior."<br><br>";
echo"nº de pares: <br>";
for($i=0;$i<=4;$i++){    
    if($vetor[$i] % 2 == 0){
        echo $vetor[$i];
        echo"<br>";
    }
}
echo"<br><pre>";
    print_r($vetor);
echo"</pre>";
?>