<?php 

class Operation{
public int $nombre1;
public int $nombre2;
public int $nombre3;

public function addition($nombre1,$nombre2){
    $this->nombre1 = $nombre1;
    $this->nombre2 = $nombre2;
    
$this ->nombre3=$nombre1 + $nombre2;
}

}


$operation = new Operation ("5","2");


echo"resultat:" . $operation->nombre3;










?>